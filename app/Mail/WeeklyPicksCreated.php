<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeeklyPicksCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $user, $mastergame, $settings;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $mastergame, $settings )
    {
        $this->user = $user;
        $this->mastergame = $mastergame;
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
            ->with('mastergame', $this->mastergame)
            ->with('settings', $this->settings);
    }
}
