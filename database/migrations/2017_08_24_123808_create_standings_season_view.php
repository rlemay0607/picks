<?php

use Illuminate\Database\Migrations\Migration;

class CreateStandingsSeasonView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW season_points_view AS
        (
            SELECT  team_name, SUM(point) total
             
            

            FROM `user_picks` 
            
            INNER JOIN
            users on users.id = user_picks.user_id
           

           GROUP by team_name
            ORDER BY total DESC
        )
    ");
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
