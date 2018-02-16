<?php

namespace Controller;

use Model\Aluno;

class AlunosController {
  //acesso aos dados

  public function listar(){
      $aluno = new Aluno();

      //manipular os dados -> modelo
      //Recuperação
      $lista = $aluno->getAlunos();
      //Manipulação/tratamento
      //...

      //Invocar/retornar os dados para a view
      //return view('listar.blade.php')<- laravel
      include './view/alunos/lista.php';
  }
}
