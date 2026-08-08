<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display blog index page.
     */
    public function index(Request $request): View
    {
        $page = Page::with('seo')->where('slug', 'blog')->first();
        $posts = Post::with('seo')->where('status', 'published')->latest()->paginate(9);

        return view('templates.blog-index', [
            'page' => $page,
            'seo' => $page?->seo,
            'posts' => $posts,
        ]);
    }

    /**
     * Display individual blog post by slug.
     */
    public function show(Request $request, string $slug): View
    {
        $post = Post::with('seo')->where('slug', $slug)->where('status', 'published')->firstOrFail();
        $recentPosts = Post::where('id', '!=', $post->id)->where('status', 'published')->latest()->take(3)->get();

        return view('templates.blog-show', [
            'post' => $post,
            'seo' => $post->seo,
            'recentPosts' => $recentPosts,
        ]);
    }
}
