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

use Illuminate\Support\Facades\Mail;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@Logout');

Route::get('istoric', 'ScoalaController@istoric_get');
Route::post('istoric', 'ScoalaController@istoric');

Route::get('contact', 'ScoalaController@contact');

Route::get('cladiri_arondate', 'PrimarieController@cladiri_arondate');
Route::get('reparatii', 'PrimarieController@reparatii')->name('reparatii');
Route::get('investitii', 'PrimarieController@investitii');
Route::get('organizare_interna', 'PrimarieController@organizare_interna');


Route::get('galerie', 'PrimarieController@galerie');
Route::post('galerie', 'PrimarieController@galerie_post')->name('galerie.post');


Route::get('adaugare_scoala', 'AdaugareDateController@adaugare_scoala');
Route::post('adaugare_scoala', ['as'=>'adaugare_scoala.post','uses'=> 'AdaugareDateController@adaugare_scoala_post']);

Route::get('adaugare_cladire', 'AdaugareDateController@adaugare_cladire');
Route::post('adaugare_cladire', ['as'=>'adaugare_cladire.post','uses'=> 'AdaugareDateController@adaugare_cladire_post']);

Route::get('adaugare_reparatie', 'AdaugareDateController@adaugare_reparatie');
Route::post('adaugare_reparatie_post', ['as'=>'adaugare_reparatie.post','uses'=> 'AdaugareDateController@adaugare_reparatie_post']);

Route::get('adaugare_organizare', 'AdaugareDateController@adaugare_organizare');
Route::post('adaugare_organizare', ['as'=>'adaugare_organizare.post','uses'=> 'AdaugareDateController@adaugare_organizare_post']);


Route::get('editare_scoala', 'EditareDateController@editare_scoala');
Route::post('editare_scoala', ['as'=>'editare_scoala.post','uses'=> 'EditareDateController@editare_scoala_post']);
Route::post('stergere_scoala', 'EditareDateController@stergere_scoala');


Route::get('test', 'PrimarieController@test');

Route::get('email', function(){
    Mail::send('emails', ['name' => 'Monica'], function($message)
    {
        $message->to('madi.vasi@yahoo.com', 'Ioana')->from('vasi.ioandre@gmail.com')->subject('Mwuhaha!!');
    });
});

