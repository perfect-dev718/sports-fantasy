<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_scoreboards', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('league_id');
            $table->string('season')->nullable();
            $table->bigInteger('winning_team_id');
            $table->bigInteger('losing_team_id');
            $table->string('winning_team_score');
            $table->string('losing_team_score');
            $table->string('year');
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
        Schema::dropIfExists('league_scoreboards');
    }
}
