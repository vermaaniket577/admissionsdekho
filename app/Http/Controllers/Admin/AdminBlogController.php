<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SeoMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('seo')->latest();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
        }

        $posts = $query->paginate(15);

        return view('admin.blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:posts,slug',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:5048',
            'featured_image_url' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $slug = !empty($validated['slug']) ? Str::slug($validated['slug']) : Str::slug($validated['title']);

        // Ensure slug uniqueness
        $count = Post::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . time();
        }

        $imageData = $this->processBinaryImage($request, '/images/blogs/bed-guide.png');

        $post = Post::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'excerpt' => $validated['excerpt'] ?? Str::limit(strip_tags($validated['content']), 150),
            'content' => $validated['content'],
            'featured_image' => $imageData,
            'status' => $validated['status'],
            'published_at' => $validated['status'] === 'published' ? now() : null,
        ]);

        // Create SEO Metadata if provided
        if (!empty($validated['meta_title']) || !empty($validated['meta_description'])) {
            $post->seo()->create([
                'meta_title' => $validated['meta_title'] ?? $post->title,
                'meta_description' => $validated['meta_description'] ?? $post->excerpt,
            ]);
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully with binary image saved to database!');
    }

    public function edit($id)
    {
        $post = Post::with('seo')->findOrFail($id);
        return view('admin.blogs.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:5048',
            'featured_image_url' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        $imageData = $this->processBinaryImage($request, $post->featured_image);

        $post->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['slug']),
            'excerpt' => $validated['excerpt'] ?? Str::limit(strip_tags($validated['content']), 150),
            'content' => $validated['content'],
            'featured_image' => $imageData,
            'status' => $validated['status'],
            'published_at' => $validated['status'] === 'published' && !$post->published_at ? now() : $post->published_at,
        ]);

        // Update SEO Metadata
        if (!empty($validated['meta_title']) || !empty($validated['meta_description'])) {
            $post->seo()->updateOrCreate(
                [],
                [
                    'meta_title' => $validated['meta_title'] ?? $post->title,
                    'meta_description' => $validated['meta_description'] ?? $post->excerpt,
                ]
            );
        }

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->seo()?->delete();
        $post->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }

    private function processBinaryImage(Request $request, $existingImage = null)
    {
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $binary = file_get_contents($file->getRealPath());
            $mime = $file->getMimeType();
            return 'data:' . $mime . ';base64,' . base64_encode($binary);
        }

        if ($request->filled('featured_image_url')) {
            $url = $request->input('featured_image_url');
            if (Str::startsWith($url, 'data:image')) {
                return $url;
            }
            $localPath = public_path(ltrim($url, '/'));
            if (file_exists($localPath)) {
                $binary = file_get_contents($localPath);
                $mime = mime_content_type($localPath) ?: 'image/png';
                return 'data:' . $mime . ';base64,' . base64_encode($binary);
            }
            return $url;
        }

        return $existingImage;
    }
}
