<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Course;
use App\Models\Lead;
use App\Models\Post;
use App\Models\Stream;

class AdminDashboardController extends Controller
{
    /**
     * Display Admin Dashboard Analytics & Recent Activity
     */
    public function index()
    {
        $stats = [
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->orWhereNull('status')->count(),
            'total_colleges' => College::count(),
            'total_streams' => Stream::count(),
            'total_courses' => Course::count(),
            'total_posts' => Post::count(),
        ];

        // Recent leads
        $recentLeads = Lead::latest()->take(8)->get();

        // Lead stream distribution metrics
        $leadsByStream = Lead::selectRaw('stream_interest, COUNT(*) as count')
            ->groupBy('stream_interest')
            ->pluck('count', 'stream_interest')
            ->toArray();

        return view('admin.dashboard', compact('stats', 'recentLeads', 'leadsByStream'));
    }
}
