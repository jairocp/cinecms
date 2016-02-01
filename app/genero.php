<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    //

    protected $fillable = ['descripcion'];
    protected $table = 'genero';
          public $timestamps = false;
}
