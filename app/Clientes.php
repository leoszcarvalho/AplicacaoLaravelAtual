<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $table = 'clientes';

  public function select_all()
  {
    $resultado = $this->select(array("id", "nome"))->get();
    return $resultado;
  }

  public function insere($data)
  {
    $insert = $this->insert($data);
    return $insert;
  }

  public function deleta($id)
  {
    $cliente = $this->find($id)->delete();
    return $cliente;
  }

}
