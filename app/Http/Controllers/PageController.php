<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Course;
use App\Models\Page;
use App\Models\Post;
use App\Models\Stream;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Resolve and render dynamic pages based on URL slug.
     */
    public function show(Request $request, ?string $slug = null): View
    {
        // Strip leading/trailing slashes if present
        $cleanSlug = $slug ? trim($slug, '/') : null;

        // Lookup page by slug in database
        $page = Page::with('seo')->where('slug', $cleanSlug)->first();

        // If not found in database, build fallback metadata structure
        if (!$page) {
            $pageName = $cleanSlug ? ucwords(str_replace(['-', '/'], ' ', $cleanSlug)) : 'Home';
            $page = new Page([
                'slug' => $cleanSlug,
                'title' => $pageName,
                'template_name' => $cleanSlug ? 'stream' : 'home',
            ]);
            $page->seo = (object) [
                'meta_title' => $pageName . ' | AdmissionsDekho Guidance',
                'meta_description' => "Get complete admission details, top UGC/AICTE colleges, fees & counselling for {$pageName}.",
                'canonical_url' => url($request->path()),
                'schema_type' => 'EducationalOrganization',
            ];
        }

        // High-speed caching for global database models
        $streams = \Illuminate\Support\Facades\Cache::remember('global_streams_with_courses', 3600, function () {
            return Stream::with('courses')->get();
        });

        $colleges = \Illuminate\Support\Facades\Cache::remember('global_colleges_all', 3600, function () {
            return College::all();
        });

        $recentPosts = \Illuminate\Support\Facades\Cache::remember('global_recent_published_posts', 1800, function () {
            return Post::where('status', 'published')->latest()->take(3)->get();
        });

        $allCourses = \Illuminate\Support\Facades\Cache::remember('global_all_courses_with_stream', 3600, function () {
            return Course::with('stream')->get();
        });

        // Match current stream by slug keywords if applicable
        $currentStream = null;
        if ($cleanSlug) {
            foreach ($streams as $str) {
                if (str_contains($cleanSlug, $str->slug)) {
                    $currentStream = $str;
                    break;
                }
            }
            if (!$currentStream) {
                if (str_contains($cleanSlug, 'pharmacy')) {
                    $currentStream = $streams->firstWhere('slug', 'pharmacy');
                } elseif (str_contains($cleanSlug, 'agriculture')) {
                    $currentStream = $streams->firstWhere('slug', 'agriculture');
                } elseif (str_contains($cleanSlug, 'hospitality') || str_contains($cleanSlug, 'hotel')) {
                    $currentStream = $streams->firstWhere('slug', 'hospitality');
                } elseif (str_contains($cleanSlug, 'bca') || str_contains($cleanSlug, 'computer')) {
                    $currentStream = $streams->firstWhere('slug', 'computer-applications');
                } elseif (str_contains($cleanSlug, 'mba') || str_contains($cleanSlug, 'management')) {
                    $currentStream = $streams->firstWhere('slug', 'management') ?? $streams->firstWhere('slug', 'commerce');
                } elseif (str_contains($cleanSlug, 'engineering')) {
                    $currentStream = $streams->firstWhere('slug', 'engineering');
                } elseif (str_contains($cleanSlug, 'commerce')) {
                    $currentStream = $streams->firstWhere('slug', 'commerce');
                } elseif (str_contains($cleanSlug, 'nursing')) {
                    $currentStream = $streams->firstWhere('slug', 'nursing');
                } elseif (str_contains($cleanSlug, 'arts') || str_contains($cleanSlug, 'humanities')) {
                    $currentStream = $streams->firstWhere('slug', 'arts');
                } elseif (str_contains($cleanSlug, 'science')) {
                    $currentStream = $streams->firstWhere('slug', 'science');
                } elseif (str_contains($cleanSlug, 'phd')) {
                    $currentStream = $streams->firstWhere('slug', 'phd');
                } elseif (str_contains($cleanSlug, 'online')) {
                    $currentStream = $streams->firstWhere('slug', 'online-programs');
                } elseif (str_contains($cleanSlug, 'education') || str_contains($cleanSlug, 'b-ed')) {
                    $currentStream = $streams->firstWhere('slug', 'education');
                }
            }
        }
        $currentStream = $currentStream ?? $streams->first();

        $template = !$cleanSlug ? 'home' : ($page->template_name ?: 'default');

        if ($cleanSlug && (str_contains($cleanSlug, 'law') || str_contains($cleanSlug, 'education-consultants'))) {
            $template = 'law';
        }

        if (!view()->exists("templates.{$template}")) {
            $template = 'default';
        }

        return view("templates.{$template}", [
            'page' => $page,
            'seo' => $page->seo,
            'streams' => $streams,
            'colleges' => $colleges,
            'recentPosts' => $recentPosts,
            'allCourses' => $allCourses,
            'currentStream' => $currentStream,
        ]);
    }
}
