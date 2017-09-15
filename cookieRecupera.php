<?php
  if(isset($_COOKIE["compras_bijully"])){
    $vack  = json_decode($_COOKIE["futuras_compras"]);
    echo $vack->itens;
  }
?>
