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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/my-books', 'BookController@index')->name('my-books'); //va a perfil de libros del usuario
Route::get('/add-book', 'BookController@storage')->name('add-book'); //va a guardado y retorna a la vista anterior
