<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InsertMatchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::select("insert into matchs(home_team_id, visiting_team_id, date, realized) values (1, 2, '2021-06-01 19:50:00', 2)");
        DB::select("insert into matchs(home_team_id, visiting_team_id, date, realized) values (4, 6, '2021-05-16 19:50:00', 2)");
        DB::select("insert into matchs(home_team_id, visiting_team_id, date, realized) values (8, 9, '2021-05-22 20:50:00', 2)");
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
