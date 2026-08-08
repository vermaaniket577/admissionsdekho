<?php

namespace App\Http\Controllers;

use App\Jobs\SendNewLeadAdminNotificationJob;
use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    /**
     * Handle lead form submission from modal or contact page.
     */
    public function submit(Request $request): JsonResponse
    {
        if (!$request->has('full_name') && ($request->has('first_name') || $request->has('last_name'))) {
            $request->merge([
                'full_name' => trim(($request->input('first_name') ?? '') . ' ' . ($request->input('last_name') ?? ''))
            ]);
        }

        if (!$request->has('notes') && $request->has('message')) {
            $request->merge([
                'notes' => $request->input('message')
            ]);
        }

        $validator = Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'email' => ['nullable', 'email', 'max:255'],
            'stream_interest' => ['nullable', 'string', 'max:255'],
            'course_interest' => ['nullable', 'string', 'max:255'],
            'current_qualification' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ], [
            'phone.regex' => 'Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.',
            'full_name.required' => 'Full Name is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $leadData = $validator->validated();

        // Create lead in database
        $lead = Lead::create([
            'full_name' => $leadData['full_name'],
            'phone' => $leadData['phone'],
            'email' => $leadData['email'] ?? null,
            'stream_interest' => $leadData['stream_interest'] ?? 'General Enquiry',
            'course_interest' => $leadData['course_interest'] ?? 'General',
            'current_qualification' => $leadData['current_qualification'] ?? '12th Pass',
            'state' => $leadData['state'] ?? 'India',
            'status' => 'New',
            'notes' => $leadData['notes'] ?? null,
        ]);

        // Post to external API https://api.anushram.com/v1/api/general-enquiry/create
        $firstName = $request->input('first_name') ?? $request->input('firstName');
        $lastName = $request->input('last_name') ?? $request->input('lastName');
        if (empty($firstName) && empty($lastName)) {
            $nameParts = explode(' ', trim($leadData['full_name']), 2);
            $firstName = $nameParts[0] ?? 'User';
            $lastName = $nameParts[1] ?? '';
        }

        $email = $leadData['email'] ?? ($request->input('email') ?? '');
        $contact = $leadData['phone'];
        $subject = $request->input('subject') ?? ($request->input('stream_interest') ? ('Admission Enquiry - ' . $request->input('stream_interest')) : 'Admission Enquiry');
        $state = $leadData['state'] ?? ($request->input('state') ?? 'India');
        $city = $request->input('city') ?? 'Delhi';
        $message = $leadData['notes'] ?? ($request->input('message') ?? 'Admission counseling requested');
        
        $refererPath = $request->header('referer') ? parse_url($request->header('referer'), PHP_URL_PATH) : '/';
        $pageRef = $request->input('pageRef') ?? ($refererPath ?: '/');

        try {
            Http::timeout(6)->post('https://api.anushram.com/v1/api/general-enquiry/create', [
                'firstName' => $firstName,
                'lastName'  => $lastName ?: 'Student',
                'email'     => $email,
                'contact'   => $contact,
                'subject'   => $subject,
                'state'     => $state,
                'city'      => $city,
                'message'   => $message,
                'pageRef'   => $pageRef,
                'read'      => false,
            ]);
        } catch (\Exception $e) {
            Log::warning('External enquiry API submission warning: ' . $e->getMessage());
        }

        // Dispatch queued email notification job
        SendNewLeadAdminNotificationJob::dispatch($lead);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your free admission counselling request has been submitted successfully. Our expert counselor will call you shortly.',
            'lead_id' => $lead->id,
        ]);
    }
}
