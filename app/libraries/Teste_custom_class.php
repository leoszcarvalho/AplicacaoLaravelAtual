<?php

namespace App\libraries;

use App\Clientes as Clientes;

/**
 *
 */
class Teste_custom_class
{

  function __construct()
  {
  }

  public function soma_valores($a, $b)
  {
    return $a + $b;
  }

  public function seleciona_clientes()
  {
    $clientes = new Clientes();

    return $clientes->select_all();
  }

}


 ?>
