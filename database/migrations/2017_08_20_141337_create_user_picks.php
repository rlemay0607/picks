<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPicks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('user_picks', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('master_game_id')->nullable();
                $table->integer('user_id')->nullable();
                $table->integer('week_number')->nullable();
                $table->string('pick')->nullable();
                $table->integer('locked')->nullable();
                $table->integer('point')->default('0');
                $table->string('master_favorit')->nullable();
                $table->string('master_underdog')->nullable();
                $table->string('master_spread')->nullable();
                $table->integer('game_scored')->nullable();
                $table->string('game_time')->nullable();
                $table->timestamps();
            });
        }

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
