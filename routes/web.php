<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  return view('hello');
});

Route::get('/db', function () {

    //Utilizando conexões diferentes
    //$db = DB::connection('mysql');
    //return $db->select("select database();");

    //Utilizando conexão do .env
    //$db = new DB();
    //return $db::select("select database();");

    //De outra forma
    //return DB::select("select database();");

    //Select em tabela
    //return DB::table("clientes")->get();

    //Select com where
    //$result = DB::table("clientes")->where('id','1')->first();
    //$result = DB::table("clientes")->where('id','1')->get();
    //var_dump($result);

});


//Parametro com ? é opcional
//Sem ? é obrigatório

/*
Route::get('/teste/classes', function () {

    return view('classes');
});

Route::get('/todos', 'TodoListController@index');
Route::get('/todos/show/{id}', 'TodoListController@show');

Route::get('/teste/{id?}', function ($id = null) {

    $data = array(
      "nome" => "Leonardo",
      "id" => $id
    );

    return view('hello')->with($data);
});
*/
//Registra todos os controllers de uma vez
Route::resource('todos', 'TodoListController');

Route::post('/todos/store', 'TodoListController@store');
