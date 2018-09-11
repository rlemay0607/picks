<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterGames extends Model
{

    protected $fillable = [ 'favorit', 'game_type', 'playoff_name', 'underdog', 'home_team' ,'spread', 'winner', 'locked', 'game_time','week_number','scored'];
}
