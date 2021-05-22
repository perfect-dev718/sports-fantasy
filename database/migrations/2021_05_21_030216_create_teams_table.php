<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->bigInteger('userId');
            $table->bigInteger('devisionId');
            $table->string('WLT')->nullable();
            $table->float('Points')->nullable();
            $table->string('Streak')->nullable();
            $table->bigInteger('Waiver')->nullable();
            $table->bigInteger('Moves');
            $table->bigInteger('leagueId');
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
        Schema::dropIfExists('teams');
    }
}
