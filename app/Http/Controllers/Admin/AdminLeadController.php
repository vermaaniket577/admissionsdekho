<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class AdminLeadController extends Controller
{
    /**
     * Display Lead Listing with Search & Filters
     */
    public function index(Request $request)
    {
        $query = Lead::latest();

        // Search filter
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('state', 'like', "%{$search}%");
            });
        }

        // Stream filter
        if ($request->filled('stream')) {
            $query->where('stream_interest', $request->input('stream'));
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $leads = $query->paginate(15)->withQueryString();

        return view('admin.leads.index', compact('leads'));
    }

    /**
     * Update Lead Status and Notes
     */
    public function updateStatus(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|string|in:new,contacted,enrolled,rejected',
            'notes' => 'nullable|string|max:1000',
        ]);

        $lead->update($validated);

        return back()->with('success', 'Lead #' . $lead->id . ' status updated successfully.');
    }

    /**
     * Delete Lead
     */
    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return back()->with('success', 'Lead record deleted.');
    }
}
