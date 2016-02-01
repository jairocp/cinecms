<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rango extends Model
{
    //

    protected $fillable = ['descripcion'];
    protected $table = 'rango';
          public $timestamps = false;
          
}
