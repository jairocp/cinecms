<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    //


    protected $fillable = ['sinopsis', 'titulo', 'imgportada','genero_id'];
    protected $table = 'pelicula';
          public $timestamps = false;
}
