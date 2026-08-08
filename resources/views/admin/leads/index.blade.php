@extends('admin.layout')

@section('title', 'Student Leads Management')
@section('header_title', 'Student Leads Management')

@section('content')
<div class="space-y-6" x-data="{ selectedLead: null, isEditModalOpen: false }">

    <!-- Search & Filter Bar -->
    <div class="bg-white border border-slate-200 rounded-2xl p-4 sm:p-5 shadow-xs flex flex-col md:flex-row justify-between items-stretch md:items-center gap-4">
        
        <form action="{{ route('admin.leads.index') }}" method="GET" class="flex flex-col sm:flex-row items-center gap-3 flex-grow">
            <!-- Search Field -->
            <div class="relative w-full sm:w-72">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, phone, email, state..."
                       class="w-full bg-slate-50 border border-slate-300 focus:border-blue-500 focus:bg-white text-slate-900 rounded-xl pl-10 pr-4 py-2.5 text-xs outline-none transition">
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

            <!-- Stream Filter -->
            <select name="stream" class="w-full sm:w-48 bg-slate-50 border border-slate-300 text-slate-700 rounded-xl px-3 py-2.5 text-xs outline-none">
                <option value="">All Streams</option>
                <option value="Engineering" {{ request('stream') == 'Engineering' ? 'selected' : '' }}>Engineering</option>
                <option value="Science" {{ request('stream') == 'Science' ? 'selected' : '' }}>Science</option>
                <option value="Arts" {{ request('stream') == 'Arts' ? 'selected' : '' }}>Arts & Humanities</option>
                <option value="Commerce" {{ request('stream') == 'Commerce' ? 'selected' : '' }}>Commerce</option>
                <option value="Nursing" {{ request('stream') == 'Nursing' ? 'selected' : '' }}>Nursing</option>
                <option value="Agriculture" {{ request('stream') == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
                <option value="Education" {{ request('stream') == 'Education' ? 'selected' : '' }}>Education</option>
                <option value="PhD" {{ request('stream') == 'PhD' ? 'selected' : '' }}>PhD Guidance</option>
                <option value="Online" {{ request('stream') == 'Online' ? 'selected' : '' }}>Online Programs</option>
            </select>

            <!-- Status Filter -->
            <select name="status" class="w-full sm:w-36 bg-slate-50 border border-slate-300 text-slate-700 rounded-xl px-3 py-2.5 text-xs outline-none">
                <option value="">All Statuses</option>
                <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="enrolled" {{ request('status') == 'enrolled' ? 'selected' : '' }}>Enrolled</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs transition shadow-xs shrink-0">
                Filter Leads
            </button>

            @if(request('search') || request('stream') || request('status'))
                <a href="{{ route('admin.leads.index') }}" class="text-xs text-slate-500 hover:text-slate-900 font-semibold underline">
                    Reset
                </a>
            @endif
        </form>

        <div class="text-xs text-slate-500 font-semibold shrink-0 text-right">
            Total Leads Found: <span class="text-slate-900 font-extrabold text-sm">{{ $leads->total() }}</span>
        </div>
    </div>

    <!-- Leads Data Table -->
    <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-slate-50 text-slate-500 border-b border-slate-200 font-bold uppercase tracking-wider">
                        <th class="py-4 px-4"># ID</th>
                        <th class="py-4 px-4">Student Name</th>
                        <th class="py-4 px-4">Phone / Email</th>
                        <th class="py-4 px-4">Stream / Course</th>
                        <th class="py-4 px-4">Qualification / State</th>
                        <th class="py-4 px-4">Status</th>
                        <th class="py-4 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 font-medium">
                    @forelse ($leads as $lead)
                        <tr class="hover:bg-slate-50/80 transition">
                            <td class="py-3.5 px-4 font-bold text-slate-400">
                                #{{ $lead->id }}
                            </td>
                            <td class="py-3.5 px-4 font-extrabold text-slate-900">
                                {{ $lead->full_name }}
                            </td>
                            <td class="py-3.5 px-4">
                                <a href="tel:{{ $lead->phone }}" class="text-blue-600 font-bold hover:underline block">
                                    {{ $lead->phone }}
                                </a>
                                <span class="text-slate-500 text-[11px] block">{{ $lead->email ?: 'No email' }}</span>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="bg-purple-50 text-purple-700 border border-purple-200 px-2 py-0.5 rounded text-[10px] font-bold block w-max mb-1">
                                    {{ $lead->stream_interest ?? 'General' }}
                                </span>
                                <span class="text-slate-500 text-[11px] block">{{ $lead->course_interest }}</span>
                            </td>
                            <td class="py-3.5 px-4 text-slate-700">
                                <span class="font-semibold block text-slate-900">{{ $lead->current_qualification ?: 'N/A' }}</span>
                                <span class="text-slate-500 text-[11px] block">{{ $lead->state ?: 'Not Specified' }}</span>
                            </td>
                            <td class="py-3.5 px-4">
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
                            <td class="py-3.5 px-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <!-- Update Status Trigger -->
                                    <button x-on:click="selectedLead = {{ json_encode($lead) }}; isEditModalOpen = true"
                                            class="bg-blue-50 hover:bg-blue-600 hover:text-white text-blue-600 border border-blue-200 px-3 py-1.5 rounded-lg text-[11px] font-bold transition">
                                        Update
                                    </button>

                                    <!-- Delete Form -->
                                    <form action="{{ route('admin.leads.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete lead #{{ $lead->id }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 p-1.5 transition" title="Delete Lead">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-slate-500 font-semibold">
                                No lead entries found matching your query criteria.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="p-4 border-t border-slate-200 bg-slate-50">
            {{ $leads->links() }}
        </div>
    </div>

    <!-- Update Lead Status Modal -->
    <div x-show="isEditModalOpen"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-sm"
         style="display: none;" x-cloak>
        <div class="bg-white border border-slate-200 rounded-3xl p-6 max-w-lg w-full shadow-2xl relative" x-on:click.away="isEditModalOpen = false">
            <h3 class="text-lg font-extrabold text-slate-900 mb-1">Update Student Lead Status</h3>
            <p class="text-xs text-slate-500 mb-4" x-text="selectedLead ? 'Managing Lead #' + selectedLead.id + ' — ' + selectedLead.full_name : ''"></p>

            <form :action="'{{ url('/admin/leads') }}/' + (selectedLead ? selectedLead.id : '') + '/status'" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Counseling Status</label>
                    <select name="status" x-model="selectedLead.status" class="w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl px-4 py-2.5 text-xs outline-none">
                        <option value="new">New (Unprocessed)</option>
                        <option value="contacted">Contacted (In Talk)</option>
                        <option value="enrolled">Enrolled (Confirmed Admission)</option>
                        <option value="rejected">Rejected / Not Interested</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Counseling Notes / Remarks</label>
                    <textarea name="notes" x-model="selectedLead.notes" rows="4" placeholder="Enter counselor notes regarding student conversation..."
                              class="w-full bg-slate-50 border border-slate-300 text-slate-900 rounded-xl p-3 text-xs outline-none transition"></textarea>
                </div>

                <div class="flex justify-end gap-3 pt-2">
                    <button type="button" x-on:click="isEditModalOpen = false" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-xl text-xs font-bold hover:bg-slate-200 transition">
                        Cancel
                    </button>
                    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-xl text-xs font-extrabold hover:bg-blue-700 shadow-md shadow-blue-600/20 transition">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
