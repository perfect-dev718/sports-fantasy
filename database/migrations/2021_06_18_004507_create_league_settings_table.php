<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('league_id');
            $table->enum('draft_format', ['double', 'snake', 'auction', 'autopick'])->default('double');
            $table->date('draft_date')->nullable();
            $table->time('draft_time')->nullable();
            $table->string('playoff_teams')->nullable();
            $table->string('playoff_date')->nullable();
            $table->bigInteger('commissioner')->nullable();
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
        Schema::dropIfExists('league_settings');
    }
}
