<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public ContactMessage $messageModel;

    public function __construct(ContactMessage $message)
    {
        $this->messageModel = $message;
    }

    public function build()
    {
        return $this->subject('Kontaktformular: ' . $this->messageModel->subject)
            ->view('emails.contact-message');
    }
}
