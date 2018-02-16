<?php

namespace Model;

 class Estado{

   public function getEstados(){
     $sql = "SELECT * FROM estados ORDER BY nome";

     $estados = Database::getInstance()->getDB()->query($sql);

     return $estados;
   }

}



 ?>
