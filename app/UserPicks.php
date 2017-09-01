<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPicks extends Model
{

    protected $fillable = [ 'master_game_id', 'game_time' , 'active', 'week_created' , 'master_favorit', 'master_underdog', 'master_spread', 'user_id', 'week_number', 'pick', 'locked', 'point'];
}