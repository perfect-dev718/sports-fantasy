<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('teamId');
            $table->bigInteger('playerId');
            $table->string('position')->nullable();
            $table->integer('games')->nullable();
            $table->integer('starts')->nullable();
            $table->integer('years')->nullable();
            $table->integer('av')->nullable();
            $table->integer('season')->nullable();
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
        Schema::dropIfExists('rosters');
    }
}
