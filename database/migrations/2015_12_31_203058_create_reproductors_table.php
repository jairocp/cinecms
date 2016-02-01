<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReproductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reproductor', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('codigohtml');
            $table->integer('id_pelicula')->unsigned();
                 $table->foreign('id_pelicula')->references('id')->on('pelicula');
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
        Schema::drop('reproductors');
    }
}
