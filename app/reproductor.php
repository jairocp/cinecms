<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reproductor extends Model
{
    //

     protected $fillable = ['codigohtml','id_pelicula'];
    protected $table = 'reproductor';
          public $timestamps = false;
}

