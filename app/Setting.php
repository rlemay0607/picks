<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name', 'season_payout' , 'year' , 'contact_number', 'contact_email', 'address','show_message', 'admin_message', 'message_color'
    ,'week_number'];
}
