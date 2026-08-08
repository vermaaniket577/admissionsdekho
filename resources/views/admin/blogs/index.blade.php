@extends('admin.layout')

@section('title', 'Blog Posts Management')
@section('header_title', 'Blog Articles Management')

@section('content')
<div class="space-y-6">

    <!-- Page Action Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-4 sm:p-6 rounded-3xl border border-slate-200 shadow-sm">
        <div>
            <h2 class="text-xl font-extrabold text-slate-900">All Published & Draft Articles</h2>
            <p class="text-xs text-slate-500 mt-1">Manage education news, admission guides, fee structures, and career updates.</p>
        </div>

        <div class="flex items-center gap-3 w-full sm:w-auto">
            <!-- Search Form -->
            <form action="{{ route('admin.blogs.index') }}" method="GET" class="flex-grow sm:flex-grow-0">
                <div class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search posts..."
                           class="w-full sm:w-64 bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 text-xs rounded-xl pl-9 pr-4 py-2.5 outline-none transition">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </form>

            <!-- Create New Post Button -->
            <a href="{{ route('admin.blogs.create') }}"
               class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-extrabold text-xs px-4 py-2.5 rounded-xl shadow-md shadow-blue-600/20 transition flex items-center gap-2 whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                <span>Write New Article</span>
            </a>
        </div>
    </div>

    <!-- Articles Table Card -->
    <div class="bg-white border border-slate-200 rounded-3xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-slate-50 text-slate-500 uppercase tracking-wider font-semibold border-b border-slate-200">
                    <tr>
                        <th class="py-4 px-6">Article Banner & Title</th>
                        <th class="py-4 px-6">Slug URL</th>
                        <th class="py-4 px-6">Status</th>
                        <th class="py-4 px-6">Publish Date</th>
                        <th class="py-4 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 font-medium">
                    @forelse($posts as $post)
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-10 rounded-lg overflow-hidden bg-slate-100 border border-slate-200 shrink-0">
                                        @if($post->featured_image)
                                            <img src="{{ \Illuminate\Support\Str::startsWith($post->featured_image, 'data:image') ? $post->featured_image : asset($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400 font-bold">BD</div>
                                        @endif
                                    </div>
                                    <div class="max-w-md">
                                        <a href="{{ route('admin.blogs.edit', $post->id) }}" class="font-bold text-slate-900 text-sm hover:text-blue-600 transition block line-clamp-1">
                                            {{ $post->title }}
                                        </a>
                                        <p class="text-slate-500 text-xs line-clamp-1 mt-0.5">{{ $post->excerpt }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="py-4 px-6">
                                <span class="font-mono text-slate-600 text-xs bg-slate-100 px-2.5 py-1 rounded-md border border-slate-200 inline-block truncate max-w-xs">
                                    /blog/{{ $post->slug }}
                                </span>
                            </td>

                            <td class="py-4 px-6">
                                @if($post->status === 'published')
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-emerald-100 text-emerald-800 border border-emerald-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-extrabold uppercase bg-amber-100 text-amber-800 border border-amber-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                                        Draft
                                    </span>
                                @endif
                            </td>

                            <td class="py-4 px-6 text-slate-600">
                                {{ $post->published_at?->format('M d, Y') ?? 'Not published' }}
                            </td>

                            <td class="py-4 px-6 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('blog.show', $post->slug) }}" target="_blank" title="View Article" class="p-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-slate-200 hover:text-slate-900 border border-slate-200 transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </a>

                                    <a href="{{ route('admin.blogs.edit', $post->id) }}" title="Edit Article" class="p-2 rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white border border-blue-200 transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </a>

                                    <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete Article" class="p-2 rounded-xl bg-red-50 text-red-600 hover:bg-red-600 hover:text-white border border-red-200 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-slate-500">
                                No blog posts found. <a href="{{ route('admin.blogs.create') }}" class="text-blue-600 underline font-bold">Write your first post!</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($posts->hasPages())
            <div class="p-4 border-t border-slate-200 bg-slate-50">
                {{ $posts->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
