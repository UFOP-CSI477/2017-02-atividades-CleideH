<?php

namespace Model;

class Cidade{

  public function getCidades() {

    $sql = "SELECT * FROM cidades ORDER BY nome";

    $cidades = Database::getInstance()->getDB()->query($sql);

    return $cidades;

  }
}

 ?>
