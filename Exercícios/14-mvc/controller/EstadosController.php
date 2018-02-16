<?php

namespace Controller;

use Model\Estado;

class EstadosController {

  public function listar(){

    $estado = new Estado();

    $lista = $estado->getEstados();

    include './view/estados/lista.php';

}

}
 ?>
