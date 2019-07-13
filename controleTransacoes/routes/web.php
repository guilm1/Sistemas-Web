<?php

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
//
// Route::get('/', function () {
//     return view('principal');
// });
Route::resource('/', 'PaginasController');
Route::resource('/tipos','TiposController');
Route::resource('/transacoes','TransController');
Route::get('/transacoes/create','TransController@create')->name('trans.create');
Route::resource('/clientes','ClientesController');

// +--------+-----------+-------------------------+------------------+-------------
// ------------------------------------+--------------+
// | Domain | Method    | URI                     | Name             | Action
//                                     | Middleware   |
// +--------+-----------+-------------------------+------------------+-------------
// ------------------------------------+--------------+
// |        | GET|HEAD  | /                       |                  | Closure
//                                     | web          |
// |        | GET|HEAD  | api/user                |                  | Closure
//                                     | api,auth:api |
// |        | POST      | clientes                | clientes.store   | App\Http\Con
// trollers\ClientesController@store   | web          |
// |        | GET|HEAD  | clientes                | clientes.index   | App\Http\Con
// trollers\ClientesController@index   | web          |
// |        | GET|HEAD  | clientes/create         | clientes.create  | App\Http\Con
// trollers\ClientesController@create  | web          |
// |        | PUT|PATCH | clientes/{cliente}      | clientes.update  | App\Http\Con
// trollers\ClientesController@update  | web          |
// |        | GET|HEAD  | clientes/{cliente}      | clientes.show    | App\Http\Con
// trollers\ClientesController@show    | web          |
// |        | DELETE    | clientes/{cliente}      | clientes.destroy | App\Http\Con
// trollers\ClientesController@destroy | web          |
// |        | GET|HEAD  | clientes/{cliente}/edit | clientes.edit    | App\Http\Con
// trollers\ClientesController@edit    | web          |
// |        | POST      | tipos                   | tipos.store      | App\Http\Con
// trollers\TiposController@store      | web          |
// |        | GET|HEAD  | tipos                   | tipos.index      | App\Http\Con
// trollers\TiposController@index      | web          |
// |        | GET|HEAD  | tipos/create            | tipos.create     | App\Http\Con
// trollers\TiposController@create     | web          |
// |        | DELETE    | tipos/{tipo}            | tipos.destroy    | App\Http\Con
// trollers\TiposController@destroy    | web          |
// |        | PUT|PATCH | tipos/{tipo}            | tipos.update     | App\Http\Con
// trollers\TiposController@update     | web          |
// |        | GET|HEAD  | tipos/{tipo}            | tipos.show       | App\Http\Con
// trollers\TiposController@show       | web          |
// |        | GET|HEAD  | tipos/{tipo}/edit       | tipos.edit       | App\Http\Con
// trollers\TiposController@edit       | web          |
// |        | GET|HEAD  | trans                   | trans.index      | App\Http\Con
// trollers\TransController@index      | web          |
// |        | POST      | trans                   | trans.store      | App\Http\Con
// trollers\TransController@store      | web          |
// |        | GET|HEAD  | trans/create            | trans.create     | App\Http\Con
// trollers\TransController@create     | web          |
// |        | GET|HEAD  | trans/{tran}            | trans.show       | App\Http\Con
// trollers\TransController@show       | web          |
// |        | PUT|PATCH | trans/{tran}            | trans.update     | App\Http\Con
// trollers\TransController@update     | web          |
// |        | DELETE    | trans/{tran}            | trans.destroy    | App\Http\Con
// trollers\TransController@destroy    | web          |
// |        | GET|HEAD  | trans/{tran}/edit       | trans.edit       | App\Http\Con
// trollers\TransController@edit       | web          |
// +--------+-----------+-------------------------+------------------+-------------
// ------------------------------------+--------------+

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
