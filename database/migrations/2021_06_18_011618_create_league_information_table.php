<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('league_id');
            $table->integer('start_regular_season')->default(14);
            $table->integer('weeks_per_matchup')->default(1);
            $table->integer('regular_season_matchups')->default(13);
            $table->string('matchup_tiebreaker')->nullable();
            $table->integer('weeks_per_playoff_matchup')->default(2);
            $table->integer('playoff_teams')->default(4);
            $table->string('playoff_seeding_tiebreaker')->nullable();
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
        Schema::dropIfExists('league_information');
    }
}
