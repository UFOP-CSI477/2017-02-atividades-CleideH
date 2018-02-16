<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
   //
   public function registros(){
     return $this->hasMany('App\Registro');
   }

}
