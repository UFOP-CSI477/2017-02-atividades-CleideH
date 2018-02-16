<?php

namespace Controller;

use Model\Cidade;

class CidadesController{

  public function listar(){

    $cidade = new Cidade();

    $lista = $cidade->getCidades();

    include  './view/cidades/lista.php';
  }


}



 ?>
