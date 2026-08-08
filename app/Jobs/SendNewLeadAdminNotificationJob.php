<?php

namespace App\Jobs;

use App\Mail\NewLeadAdminMail;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNewLeadAdminNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Lead $lead;

    /**
     * Create a new job instance.
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info("Processing new lead notification job for Lead ID: {$this->lead->id} - {$this->lead->full_name}");

        $adminEmail = config('mail.admin_address', 'admissions@admissionsdekho.com');

        try {
            Mail::to($adminEmail)->send(new NewLeadAdminMail($this->lead));
            Log::info("Admin notification mail successfully sent for Lead ID: {$this->lead->id}");
        } catch (\Throwable $e) {
            Log::error("Failed to send admin lead notification email: " . $e->getMessage());
        }
    }
}
