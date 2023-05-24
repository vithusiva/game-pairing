<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roundresults', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id');
            $table->integer('round_id');
            //$table->integer('roundNo');
            $table->integer('playerid');
            $table->string('playername');
            $table->integer('playerscore');
            $table->integer('opponentid');
            $table->string('opponentname');
            $table->integer('opponentscore');
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
        Schema::dropIfExists('roundresults');
    }
}
