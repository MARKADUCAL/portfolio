<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param array<string, string|null> $payload
     */
    public function __construct(public array $payload)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Portfolio Contact Message'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-form'
        );
    }

    /**
     * @return array<string, string>
     */
    public function with(): array
    {
        return [
            'name' => $this->payload['name'] ?? '',
            'email' => $this->payload['email'] ?? '',
            'subject' => $this->payload['subject'] ?? '',
            'messageText' => $this->payload['message'] ?? '',
        ];
    }
}
