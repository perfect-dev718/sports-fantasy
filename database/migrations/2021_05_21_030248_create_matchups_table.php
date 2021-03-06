<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchups', function (Blueprint $table) {
            $table->id();
            $table->timestamp('matchupDate');
            $table->bigInteger('leagueId');
            $table->bigInteger('winningTeamId');
            $table->bigInteger('losingTeamId');
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
        Schema::dropIfExists('matchups');
    }
}
