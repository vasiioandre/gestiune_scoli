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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');
Route::get('logout', 'HomeController@Logout');

Route::get('istoric', 'ScoalaController@istoric');
Route::post('istoric', 'ScoalaController@istoric');

Route::get('cladiri_arondate', 'PrimarieController@cladiri_arondate');
Route::get('reparatii', 'PrimarieController@reparatii');

Route::get('adaugare_scoala', 'PrimarieController@adaugare_scoala');

