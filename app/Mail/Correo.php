<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $name, public $subject)
    {
        //
    }

    public function build()
    {
        return $this->view('emails.email')
            ->subject($this->subject)
            ->with(['content' => $this->name]);
    }
    public function builds()
    {
        return $this->view('emails.email')
            ->subject($this->subject)
            ->with(['content' => $this->name]);
    }
}
