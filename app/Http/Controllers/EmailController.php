<?php

namespace App\Http\Controllers;


use Mail;


class EmailController extends Controller
{
    public function sheetscreated()
    {
        Mail::send(['text'=>'emails.send'],['name','NFLPOOL'],function ($message){
            $message->to('lemay.ryan@gmail.com', 'Ryan LeMay')->subject('Test Email');
            $message->from('nflpool@sports-now.org', 'NFLPool');
        });
    }
}
