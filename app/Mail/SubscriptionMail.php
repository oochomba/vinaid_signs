<?php

namespace App\Mail;

use App\Models\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subscriber;
    public $setting;


    /**
     * Create a new message instance.
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
        $this->setting = SettingModel::getSingle();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subscriber->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: config('siteconfig.version').'email.subscription',
            with: [
                'subscriber' => $this->subscriber,
                'setting' => $this->setting,
            ],
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
