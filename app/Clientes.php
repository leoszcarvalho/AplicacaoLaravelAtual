<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $table = 'clientes';
  public $timestamps = false;

  public function select_all()
  {
    $resultado = $this->select(array("id", "nome"))->get();

    return $resultado;
  }

  public function select_where($parametro)
  {
    $resultado = $this->select(array("id", "nome"))
                 ->where('id', '=', $parametro)
                 ->get();

    return $resultado;

  }

  public function insere($data)
  {
    $insert = $this->insert($data);
    return $insert;
  }

  public function atualiza($id, $data)
  {
    $update = $this->where('id', $id)
                   ->update($data);
    return $update;
  }

  public function deleta($id)
  {
    $cliente = $this->find($id)->delete();
    return $cliente;
  }

}
