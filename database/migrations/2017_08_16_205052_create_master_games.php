<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('favorit');
            $table->string('underdog');
            $table->float('spread');
            $table->string('winner')->nullable();
            $table->integer('locked')->nullable();
            $table->string('game_time');
            $table->integer('week_number');
            $table->integer('scored')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
