<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes as Clientes;

class TodoListController extends Controller
{

    public function index(){

      //$clientes = Clientes::all();
      //var_dump($clientes);
      //foreach ($clientes as $key => $cliente) {
        //var_dump($cliente->nome);
      //}
      //echo       $clientes[0]->nome;

      $clientes = new Clientes();

      //Função de select ===========================================================================================================
      /*$resultados = $clientes->select_all();

     foreach ($resultados as $key => $resultado) {
        var_dump($resultado->id);
     }

     echo $resultados[0]->nome;

     */

     //Função de insert ===========================================================================================================

     /*
     $data = array(
       "nome" => "Leonardo"
     );

     $insert = $clientes->insere($data);

     var_dump($insert);
     */

     //Função de delete ===========================================================================================================

     //var_dump($clientes->deleta(1));

     return view('hello');

    }

    public function create(){

    }

    public function store(){

    }

    public function show($id){

      return view('hello');

    }

    public function edit($id){

    }

    public function update($id){

    }

    public function destroy($id){

    }

}