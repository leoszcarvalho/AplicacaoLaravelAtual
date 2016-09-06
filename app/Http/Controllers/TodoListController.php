<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes as Clientes;
use App\libraries\Teste_custom_class as Teste_custom_class;

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

      //Utilizando custom class libraries =========================================================================================

      //Basta adicionar com os namespaces certos no início do arquivo
      //e no arquivo da classe também
      /*$custom_class = new Teste_custom_class();

      echo $custom_class->soma_valores(5,7);
      var_dump($custom_class->seleciona_clientes());
      */

      //Função de select ===========================================================================================================
      /*$resultados = $clientes->select_all();

     foreach ($resultados as $key => $resultado) {
        var_dump($resultado->id);
     }

     echo $resultados[0]->nome;

     */

     //Função de select com where ===========================================================================================================

     /*$resultados = $clientes->select_where(2);

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

     //Função de update ===========================================================================================================

     /*$data = array(
       "nome" => "Roberto"
     );

     $update = $clientes->atualiza(3, $data);

     var_dump($update);
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
