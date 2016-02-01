<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->increments('id')->unique();
              $table->string('titulo');
                $table->string('sinopsis');

                 $table->integer('vistas');
                 $table->string('linktrailer');
                 $table->string('imgportada');
           
                 $table->integer('genero_id')->unsigned();
                 $table->foreign('genero_id')->references('id')->on('genero');
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
        Schema::drop('peliculas');
    }
}
