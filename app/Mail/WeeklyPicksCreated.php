<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeeklyPicksCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $user, $settings;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,  $settings )
    {
        $this->user = $user;

        $this->settings = $settings;


    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.createpicks')
            ->with('user', $this->user)
            ->with('settings', $this->settings);
    }
}
