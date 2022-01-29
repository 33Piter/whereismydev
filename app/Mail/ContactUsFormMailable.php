<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $identification;
    public $phone;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $identification, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->identification = $identification;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact-form')
            ->to(env('MAIL_FROM_ADDRESS'))
            ->subject('Nova mensagem do formulário de contato');
    }
}
