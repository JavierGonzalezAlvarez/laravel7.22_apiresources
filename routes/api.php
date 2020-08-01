<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//namespaece de recibos
//use App\Http\Resources\ReciboResource as RecibosResource;
//use App\Http\Controllers\TbCuotascontroller;

//donde están los campos que voy a rellenar $fillable
//en el caso de que no usemos un controller.php
//use App\tb_cuotas;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//LISTADO DEL JSON SON API RESOURCES
//pasamos dos parametros:  la url y que apunte al fichero donde está la lógica
Route::apiResource('/cuotas', 'TbCuotasController');
//Otra forma, desde postman
//Route::post('/post', 'TbCuotasController@store');

//mostrara todos los registros en le formato de la BD
Route::get('/get_index', 'TbCuotasController@index');

//Para un registro del json
Route::get('/get', 'TbCuotasController@show');

//Para una colleccion del json
Route::get('/get_colletion', 'TbCuotasController@show_colletion');

/*
Route::get('/get', function () {
    //return new RecibosResource(tb_cuotas::find(1));
    return new RecibosResource(tb_cuotas::index);
    //return new RecibosResource(tb_cuotas::with('nombre')->paginate(25));    
    
});
*/

//ingresar datos desde formulario
Route::get('/post_formulario', 'TbCuotasController@create');




