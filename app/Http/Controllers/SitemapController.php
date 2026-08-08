<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    /**
     * Generate dynamic XML Sitemap for Search Engines (Googlebot, Bingbot).
     */
    public function index(): Response
    {
        $xml = \Illuminate\Support\Facades\Cache::remember('xml_sitemap_content', 3600, function () {
            $baseUrl = config('app.url', url('/'));

            // Core Static Landing Pages & Course Slugs
            $staticUrls = [
                [
                    'loc' => url('/'),
                    'lastmod' => Carbon::now()->toIso8601String(),
                    'changefreq' => 'daily',
                    'priority' => '1.0',
                ],
                [
                    'loc' => url('/blog'),
                    'lastmod' => Carbon::now()->toIso8601String(),
                    'changefreq' => 'daily',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/courses-trusted-education-consultants/'),
                    'lastmod' => Carbon::now()->subDays(2)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/best-engineering-courses-after-12th/'),
                    'lastmod' => Carbon::now()->subDays(2)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/courses-after-12th-science/'),
                    'lastmod' => Carbon::now()->subDays(3)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/best-courses-after-12th-commerce/'),
                    'lastmod' => Carbon::now()->subDays(3)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/best-courses-after-12th-arts-humanities/'),
                    'lastmod' => Carbon::now()->subDays(4)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.9',
                ],
                [
                    'loc' => url('/bca-mca-computer-applications/'),
                    'lastmod' => Carbon::now()->subDays(4)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/nursing-b-sc-nursing-college/'),
                    'lastmod' => Carbon::now()->subDays(5)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/b-pharm-d-pharm-pharmacy-college/'),
                    'lastmod' => Carbon::now()->subDays(5)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/b-sc-m-sc-agriculture-college/'),
                    'lastmod' => Carbon::now()->subDays(6)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/hotel-management-hospitality-college/'),
                    'lastmod' => Carbon::now()->subDays(6)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/education-b-ed-college/'),
                    'lastmod' => Carbon::now()->subDays(7)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/phd-doctorate-research-guidance/'),
                    'lastmod' => Carbon::now()->subDays(7)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/ugc-deb-online-distance-education/'),
                    'lastmod' => Carbon::now()->subDays(7)->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ],
                [
                    'loc' => url('/get-in-touch/'),
                    'lastmod' => Carbon::now()->subDays(10)->toIso8601String(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ],
            ];

            // Fetch Database Pages
            $dbPages = Page::all();
            foreach ($dbPages as $p) {
                $slugPath = trim($p->slug, '/');
                if ($slugPath) {
                    $pageUrl = url('/' . $slugPath . '/');
                    if (!collect($staticUrls)->contains('loc', $pageUrl)) {
                        $staticUrls[] = [
                            'loc' => $pageUrl,
                            'lastmod' => ($p->updated_at ?? Carbon::now())->toIso8601String(),
                            'changefreq' => 'weekly',
                            'priority' => '0.8',
                        ];
                    }
                }
            }

            // Fetch Published Blog Articles
            $posts = Post::where('status', 'published')->latest()->get();
            $blogUrls = [];
            foreach ($posts as $post) {
                $blogUrls[] = [
                    'loc' => url('/blog/' . $post->slug),
                    'lastmod' => ($post->updated_at ?? $post->created_at ?? Carbon::now())->toIso8601String(),
                    'changefreq' => 'weekly',
                    'priority' => '0.7',
                ];
            }

            $allUrls = array_merge($staticUrls, $blogUrls);

            // Build XML Content
            $xmlStr = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xmlStr .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
            $xmlStr .= 'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" ';
            $xmlStr .= 'xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

            foreach ($allUrls as $url) {
                $xmlStr .= '  <url>' . "\n";
                $xmlStr .= '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . "\n";
                $xmlStr .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
                $xmlStr .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
                $xmlStr .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
                $xmlStr .= '  </url>' . "\n";
            }

            $xmlStr .= '</urlset>';
            return $xmlStr;
        });

        return response($xml, 200, [
            'Content-Type' => 'text/xml; charset=UTF-8',
        ]);
    }
}
