<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id('IDpoke');
            $table->string('pokename');
            $table->integer('HP');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('spattack');
            $table->integer('spdefense');
            $table->integer('speed');
            $table->integer('dualtype');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
