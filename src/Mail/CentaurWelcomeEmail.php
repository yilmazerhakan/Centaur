<?php

namespace Centaur\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CentaurWelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $code)
    {
        $this->email = $email;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Your account has been created!')
            ->view('centaur.email.welcome');
    }
}
