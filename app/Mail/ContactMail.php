<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->subject = $data['subject'] ?? 'Nuevo correo de contacto desde la web de ' . config('app.name');
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from($this->data['email'])
            ->view('mail.contact-mail')
            ->with('data', $this->data);
    }
}
