<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController')->name('home');

Auth::routes();


Route::prefix('administracion')->namespace('Admin')->name('admin.')->group(function(){
    Route::resource ('usuarios', 'UsersController')->names('user')->parameters(['usuarios'=> 'user']);
    
});


// Gestion
//denuncias

//Configuracion
//tipo
//prioridades

 //Reportes
 //creados
 //pendientes

//Administracion
//usuarios
//roles
//permisos (solo lectura)
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
