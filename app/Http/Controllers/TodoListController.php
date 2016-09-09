<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes as Clientes;
use App\libraries\Teste_custom_class as Teste_custom_class;
use Validator;
use Session;

class TodoListController extends Controller
{



    public function __construct()
    {

    }

    public function index(){

      if(Session::has('chave')){
        echo "A chave existe";
      }
      //$clientes = Clientes::all();
      //var_dump($clientes);
      //foreach ($clientes as $key => $cliente) {
        //var_dump($cliente->nome);
      //}
      //echo       $clientes[0]->nome;

      //Utilizando sessions =====================================================================================================


      //Checar se sessão existe
      //Session::has('chave')

      //Deletar variável específica de sessão
      //Session::forget('chave');

      //Deletar todas as variáveis de sessão
      //Session::flush();

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
      echo Session::get('chave');


    }

    public function store(Request $request){

        $messages = [
          'required' => 'O campo :attribute é obrigatório.',
          'max' => 'O campo :attribute não pode ser maior que 255 caracteres.',
          'title.max' => 'O campo :attribute só pode ter no máximo 20 caracteres.',

        ];

        var_dump($request->input("title"));

        $validator = Validator::make($request->all(),
                      [
                      'name' => 'required|max:255',
                      'title' => 'required|max:20',
                      ],
                      $messages);



        if ($validator->fails()) {

            //retorna os erros do formulário
            var_dump($validator->errors());

        }

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
