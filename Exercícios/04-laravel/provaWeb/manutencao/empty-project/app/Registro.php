<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //Associa um Registro a um Equipamento
    public function equipamento(){
      return $this->belongsTo('App\Equipamento');
    }

}
