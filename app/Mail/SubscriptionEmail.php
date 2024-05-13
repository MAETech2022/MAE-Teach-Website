<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $mailFromAddress;
    public $mailToAddress;
    
    /**
     * Create a new message instance.
     */
    public function __construct($formData,$mailFromAddress,$mailToAddress)
    {
        $this->formData = $formData;
        $this->mailFromAddress = $mailFromAddress;
        $this->mailToAddress = $mailToAddress;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Subcription Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.subscription-us',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->from($this->mailFromAddress)
                    ->to($this->mailToAddress)
                    ->subject('New Subcription Email')
                    ->view('emails.subscription-us')
                    ->with(['formData' => $this->formData]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
