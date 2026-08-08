<?php

namespace App\Mail;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewLeadAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public Lead $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Lead Submitted: ' . $this->lead->full_name . ' (' . $this->lead->phone . ')',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            htmlString: "
                <h2>New Lead Received - AdmissionsDekho</h2>
                <p><strong>Full Name:</strong> {$this->lead->full_name}</p>
                <p><strong>Phone:</strong> {$this->lead->phone}</p>
                <p><strong>Email:</strong> {$this->lead->email}</p>
                <p><strong>Stream Interest:</strong> {$this->lead->stream_interest}</p>
                <p><strong>Course Interest:</strong> {$this->lead->course_interest}</p>
                <p><strong>Current Qualification:</strong> {$this->lead->current_qualification}</p>
                <p><strong>State:</strong> {$this->lead->state}</p>
                <p><strong>Submission Time:</strong> {$this->lead->created_at}</p>
            ",
        );
    }
}
