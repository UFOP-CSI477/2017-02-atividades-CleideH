<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

   protected $fillable=['nome','estado_id'];
   public $timestamps = false;
    //1-N ->estadi->Cidades
    public function cidades(){
      return $this->hasMany('App\Cidade');
    }
}
