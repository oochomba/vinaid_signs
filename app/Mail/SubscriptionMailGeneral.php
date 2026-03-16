<?php

namespace App\Mail;

use App\Models\SettingModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionMailGeneral extends Mailable
{
    use Queueable, SerializesModels;
    public $newsletter;
    public $setting;

    /**
     * Create a new message instance.
     */
    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
        $this->setting = SettingModel::getSingle();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:  $this->newsletter->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: config('siteconfig.version').'email.general',
            with: [
                'newsletter' => $this->newsletter,
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
