<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  //trabalhar com associação em massa(lista de atributos que podem ser preenchidos)
    protected $fillable=['nome','estado_id'];
    //campo dentr da lista não será inserido, modificados ou submetidos
    //protected $guarded=['senha'];
    public $timestamps = false;
    //Cidade -> Estado
    public function estado(){
      return $this->belongsTo('App\Estado');
    }

    public function alunos(){
      return $this->hasMany('App\Aluno');
    }
}
