@extends('admin.layout')

@section('title', 'Executive Dashboard')
@section('header_title', 'Executive Dashboard')

@section('content')
<div class="space-y-6">

    <!-- Key Metrics Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <!-- Total Leads -->
        <div class="bg-white border border-slate-200 rounded-2xl p-5 relative overflow-hidden shadow-xs">
            <div class="flex justify-between items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Total Leads</span>
                    <h3 class="text-3xl font-extrabold text-slate-900 mt-1">{{ number_format($stats['total_leads']) }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 text-blue-600 flex items-center justify-center font-bold text-xl">
                    📞
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                <span class="text-emerald-600 font-bold">● Active Student Enquiries</span>
                <a href="{{ route('admin.leads.index') }}" class="text-blue-600 hover:underline font-semibold">View All →</a>
            </div>
        </div>

        <!-- New Unread Leads -->
        <div class="bg-white border border-slate-200 rounded-2xl p-5 relative overflow-hidden shadow-xs">
            <div class="flex justify-between items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">New Pending Leads</span>
                    <h3 class="text-3xl font-extrabold text-amber-600 mt-1">{{ number_format($stats['new_leads']) }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 text-amber-600 flex items-center justify-center font-bold text-xl">
                    ⏳
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                <span class="text-slate-500 font-medium">Requires Counselor Action</span>
                <a href="{{ route('admin.leads.index', ['status' => 'new']) }}" class="text-amber-600 hover:underline font-semibold">Review →</a>
            </div>
        </div>

        <!-- Total Colleges -->
        <div class="bg-white border border-slate-200 rounded-2xl p-5 relative overflow-hidden shadow-xs">
            <div class="flex justify-between items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Listed Colleges</span>
                    <h3 class="text-3xl font-extrabold text-slate-900 mt-1">{{ number_format($stats['total_colleges']) }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 text-purple-600 flex items-center justify-center font-bold text-xl">
                    🏫
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                <span class="text-purple-600 font-semibold">{{ $stats['total_courses'] }} Approved Courses</span>
                <span class="text-slate-400">Active</span>
            </div>
        </div>

        <!-- Total Blog Articles -->
        <div class="bg-white border border-slate-200 rounded-2xl p-5 relative overflow-hidden shadow-xs">
            <div class="flex justify-between items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500">Blog Articles</span>
                    <h3 class="text-3xl font-extrabold text-slate-900 mt-1">{{ number_format($stats['total_posts']) }}</h3>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xl">
                    📰
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex justify-between items-center text-xs">
                <span class="text-emerald-600 font-semibold">SEO Index Status</span>
                <a href="{{ route('blog.index') }}" target="_blank" class="text-slate-600 hover:text-slate-900 font-medium">View Live →</a>
            </div>
        </div>

    </div>

    <!-- Main Section: Recent Leads Table & Stream Metrics -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Recent Leads Table (2 Columns) -->
        <div class="lg:col-span-2 bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-4">
            <div class="flex justify-between items-center pb-3 border-b border-slate-100">
                <div>
                    <h2 class="text-lg font-extrabold text-slate-900">Recent Student Enquiries</h2>
                    <p class="text-xs text-slate-500">Latest admission leads submitted from website forms</p>
                </div>
                <a href="{{ route('admin.leads.index') }}" class="bg-blue-50 hover:bg-blue-100 text-blue-600 border border-blue-200 px-3.5 py-1.5 rounded-xl text-xs font-bold transition">
                    View All Leads
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead>
                        <tr class="text-slate-500 border-b border-slate-200 font-bold uppercase bg-slate-50">
                            <th class="py-3 px-3">Student Name</th>
                            <th class="py-3 px-3">Contact</th>
                            <th class="py-3 px-3">Stream</th>
                            <th class="py-3 px-3">State</th>
                            <th class="py-3 px-3 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 font-medium">
                        @forelse ($recentLeads as $lead)
                            <tr class="hover:bg-slate-50/80 transition">
                                <td class="py-3 px-3 font-bold text-slate-900">
                                    {{ $lead->full_name }}
                                </td>
                                <td class="py-3 px-3">
                                    <span class="block text-slate-800 font-semibold">{{ $lead->phone }}</span>
                                    <span class="text-slate-500 text-[10px]">{{ $lead->email }}</span>
                                </td>
                                <td class="py-3 px-3">
                                    <span class="bg-purple-50 text-purple-700 font-semibold px-2 py-0.5 rounded text-[10px] border border-purple-200">
                                        {{ $lead->stream_interest ?? 'General' }}
                                    </span>
                                </td>
                                <td class="py-3 px-3 text-slate-700">
                                    {{ $lead->state ?: 'Not Specified' }}
                                </td>
                                <td class="py-3 px-3 text-right">
                                    @php
                                        $statusColor = match($lead->status) {
                                            'contacted' => 'bg-blue-100 text-blue-800 border-blue-200',
                                            'enrolled' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
                                            'rejected' => 'bg-red-100 text-red-800 border-red-200',
                                            default => 'bg-amber-100 text-amber-800 border-amber-200',
                                        };
                                    @endphp
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase border {{ $statusColor }}">
                                        {{ $lead->status ?: 'New' }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-500 font-semibold">
                                    No lead records found in database yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Stream Distribution Breakdown (1 Column) -->
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-xs space-y-4">
            <div class="pb-3 border-b border-slate-100">
                <h2 class="text-lg font-extrabold text-slate-900">Stream Demographics</h2>
                <p class="text-xs text-slate-500">Distribution of student interest by stream</p>
            </div>

            <div class="space-y-3 pt-2">
                @forelse ($leadsByStream as $streamName => $leadCount)
                    @php
                        $percentage = $stats['total_leads'] > 0 ? round(($leadCount / $stats['total_leads']) * 100) : 0;
                    @endphp
                    <div>
                        <div class="flex justify-between text-xs font-semibold mb-1">
                            <span class="text-slate-700">{{ $streamName ?: 'General Enquiry' }}</span>
                            <span class="text-blue-600 font-extrabold">{{ $leadCount }} ({{ $percentage }}%)</span>
                        </div>
                        <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden border border-slate-200">
                            <div class="h-full bg-gradient-to-r from-blue-600 to-indigo-500 rounded-full" style="width: {{ $percentage }}%"></div>
                        </div>
                    </div>
                @empty
                    <div class="py-6 text-center text-xs text-slate-500 font-semibold">
                        No stream demographic metrics available yet.
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</div>
@endsection
