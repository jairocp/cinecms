<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //

    protected $table = 'usuario';

     public $timestamps = false;
         protected $primaryKey = 'id';
         protected $filiable=['username','email','contra','nombre','imgperfil','idrango']

}
