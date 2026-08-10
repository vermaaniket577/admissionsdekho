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
            $rawTitle = $cleanSlug ? ucwords(str_replace(['-', '/'], ' ', $cleanSlug)) : 'Home';
            
            // Format title to be between 50 and 60 characters
            $metaTitle = "{$rawTitle} 2026 Admissions & Fees | AdmissionsDekho";
            if (strlen($metaTitle) > 60) {
                $metaTitle = "{$rawTitle} Admissions 2026 | AdmissionsDekho";
            } elseif (strlen($metaTitle) < 50) {
                $metaTitle = "{$rawTitle} 2026 Course Admissions & Fees | AdmissionsDekho";
            }

            // Format description to be between 150 and 160 characters
            $metaDescription = "Explore complete admission details, eligibility criteria, UGC approved college lists, annual fee structures & counselling for {$rawTitle} on AdmissionsDekho.";
            if (strlen($metaDescription) < 150) {
                $metaDescription = "Explore complete admission details, eligibility criteria, UGC approved college lists, annual fee structures & counselling for {$rawTitle} on AdmissionsDekho Guidance.";
            }
            if (strlen($metaDescription) > 160) {
                $metaDescription = substr($metaDescription, 0, 157) . '...';
            }

            $metaKeywords = strtolower("{$rawTitle}, {$rawTitle} admissions 2026, {$rawTitle} fees, {$rawTitle} eligibility, top ugc colleges, admissionsdekho");

            $page = new Page([
                'slug' => $cleanSlug,
                'title' => $rawTitle,
                'template_name' => $cleanSlug ? 'stream' : 'home',
            ]);
            $page->seo = (object) [
                'meta_title' => $metaTitle,
                'meta_description' => $metaDescription,
                'meta_keywords' => $metaKeywords,
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

        if ($cleanSlug === 'privacy-policy') {
            $template = 'privacy-policy';
        } elseif ($cleanSlug === 'legal-support') {
            $template = 'legal-support';
        } elseif ($cleanSlug === 'terms-conditions') {
            $template = 'terms-conditions';
        } elseif ($cleanSlug === 'free-counseling') {
            $template = 'free-counseling';
        } elseif ($cleanSlug === 'evaluate-my-profile') {
            $template = 'evaluate-my-profile';
        } elseif ($cleanSlug === 'universities') {
            return (new UniversityController())->index($request);
        } elseif ($cleanSlug && str_starts_with($cleanSlug, 'universities/')) {
            $univSlug = str_replace('universities/', '', $cleanSlug);
            return (new UniversityController())->show($univSlug);
        } elseif ($cleanSlug && (str_contains($cleanSlug, 'law') || str_contains($cleanSlug, 'education-consultants'))) {
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
