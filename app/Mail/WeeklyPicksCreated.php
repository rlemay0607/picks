<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WeeklyPicksCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $user, $mastergames, $settings;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $mastergames, $settings )
    {
        $this->user = $user;
        $this->mastergames = $mastergames;
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
            ->with('mastergames', $this->mastergames)
            ->with('settings', $this->settings);
    }
}
