<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        // if (Auth::check()) {
        //     $this->user = Auth::user();
        // }
          
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // dd(Auth::check());

        return new Envelope(
            subject: 'mails.queueMail',
        );
    }
    public function build()
    {
          
        return $this->view('mails.queueMail');
            
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
            
        return new Content(
            view: 'mails.queueMail',
        );
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
