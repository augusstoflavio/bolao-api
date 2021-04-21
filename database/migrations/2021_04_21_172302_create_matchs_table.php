<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('home_team_id')->nullable(false);
            $table->foreign('home_team_id')->references('id')->on('teams');

            $table->unsignedBigInteger('visiting_team_id')->nullable(false);
            $table->foreign('visiting_team_id')->references('id')->on('teams');

            $table->dateTime('date')->nullable(false);

            $table->tinyInteger('goals_home_team')->nullable(true);
            $table->tinyInteger('goals_visiting_team')->nullable(true);

            $table->boolean('realized')->default(false);

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
        Schema::dropIfExists('matchs');
    }
}
