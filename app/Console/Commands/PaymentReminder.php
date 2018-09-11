<?php

namespace App\Console\Commands;

use App\Mail\OutStandingPayment;
use App\User;
use Illuminate\Console\Command;
use Mail;

class PaymentReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PaymentReminder:sendreminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Reminder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where([['total_paid', '<', '110'],['active','1']])->get();
        foreach ($users as $user) {
            Mail::to($user->email)->cc(['lemay.ryan@gmail.com', 'rlemay1@msn.com'])->send(new OutStandingPayment($user));
        }
    }
}
