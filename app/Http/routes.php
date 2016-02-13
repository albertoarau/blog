<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 Tipos de Rutas : GET, POST, PUT, DELETE , RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('article/{nombre?}', function($nombre = "No coloco nombre"){
  echo "Esta es la seccion de articulos es:" . $nombre;
});

*/

/*
Route::get('article', [
  'as' => 'articles',
  'uses' => 'UserController@index'
  ]);

  */

  Route::group(['prefix' => 'admin'], function(){

        Route::resource('users', 'UsersController');
  });
