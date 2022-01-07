<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistaConciertosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_conciertos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artista_id');
            $table->foreign('artista_id')->references('id')->on('artistas');
            $table->unsignedBigInteger('concierto_id');
            $table->foreign('concierto_id')->references('id')->on('conciertos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artista_conciertos');
    }
}
