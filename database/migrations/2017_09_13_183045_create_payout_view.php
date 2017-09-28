<?php

use Illuminate\Database\Migrations\Migration;

class CreatePayoutView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW Payout_view AS
        (
            select 
            week_number, 
            count(DISTINCT user_id)*2 as 'Weekly Payout', 
            count(DISTINCT user_id)*2 as 'Season Payout', 
            count(DISTINCT user_id) as 'Admin Fee', 
            count(DISTINCT user_id)*5 as Total  
            
            from user_picks where locked='1' 
            GROUP BY week_number
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
