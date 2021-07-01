<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* EJERCICIO 2
Route::get('/test', ['middleware' => 'semana', function(){
    return '<br> probando ruta con middleware';
}]);
FIN EJERCICIO 2*/

/* EJERCICIO 3
Route::group(['middleware' => 'semana'], function(){
    Route::get('/test', ['middleware' => 'semana', function(){
        return '<br> probando ruta get con middleware';
    }]);
    Route::post('/test', ['middleware' => 'semana', function(){
        return '<br> probando ruta post con middleware';
    }]);
    Route::put('/test', ['middleware' => 'semana', function(){
        return '<br> probando ruta put con middleware';
    }]);
    Route::delete('/test', ['middleware' => 'semana', function(){
        return '<br> probando ruta delete con middleware';
    }]);
});
FIN EJERCICIO 3*/

//Ejercicio 4
//Para que esto funcione tengo que ir a RouteServiceProvider.php y descomentar linea 29: protected $namespace = 'App\\Http\\Controllers';
Route::get('test', 'SemanaController@validar_dia');

//Forma alternativa
//Route::get('/test', [App\Http\Controllers\SemanaController::class, 'validar_dia']);
//Fin ejercicio 4
