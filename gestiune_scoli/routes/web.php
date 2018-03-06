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

Route::get('intro', function(){
   return 'ana';
});

Route::get('test', 'ScoalaController@test');

Route::get('home', 'ScoalaController@index');

Route::get('info_generale', 'ScoalaController@info');