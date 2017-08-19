<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterGames extends Model
{

    protected $fillable = [ 'favorit','underdog', 'spread', 'winner', 'locked', 'game_time','week_number','scored'];
}
