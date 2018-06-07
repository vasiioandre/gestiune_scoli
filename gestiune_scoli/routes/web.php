<?php

use Illuminate\Support\Facades\Mail;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@Logout');

Route::get('istoric', 'ScoalaController@istoric_get')->name('get_istoric');
Route::post('istoric', 'ScoalaController@istoric_post');

Route::get('contact', 'ScoalaController@contact');

Route::get('cladiri_arondate', 'PrimarieController@cladiri_arondate');
Route::get('reparatii', 'PrimarieController@reparatii')->name('reparatii');
Route::get('investitii', 'PrimarieController@investitii')->name('investitii');
Route::get('avarii', 'PrimarieController@avarii')->name('avarii');
Route::get('utilitati', 'PrimarieController@utilitati')->name('utilitati');
Route::get('organizare_interna', 'PrimarieController@organizare_interna');

Route::post('cautare_reparatie', 'PrimarieController@cautare_reparatie')->name('cautare_reparatie');

Route::get('galerie', 'PrimarieController@galerie');
Route::post('galerie', 'PrimarieController@galerie_post')->name('galerie.post');


Route::get('adaugare_scoala', 'AdaugareDateController@adaugare_scoala');
Route::post('adaugare_scoala', ['as'=>'adaugare_scoala.post','uses'=> 'AdaugareDateController@adaugare_scoala_post']);

Route::get('adaugare_cladire', 'AdaugareDateController@adaugare_cladire');
Route::post('adaugare_cladire', ['as'=>'adaugare_cladire.post','uses'=> 'AdaugareDateController@adaugare_cladire_post']);

Route::get('adaugare_reparatie', 'AdaugareDateController@adaugare_reparatie');
Route::post('adaugare_reparatie_post', ['as'=>'adaugare_reparatie.post','uses'=> 'AdaugareDateController@adaugare_reparatie_post']);

Route::get('adaugare_investitie', 'AdaugareDateController@adaugare_investitie');
Route::post('adaugare_investitie', ['as'=>'adaugare_investitie.post','uses'=> 'AdaugareDateController@adaugare_investitie_post']);

Route::get('adaugare_avarie', 'AdaugareDateController@adaugare_avarie');
Route::post('adaugare_avarie', ['as'=>'adaugare_avarie.post','uses'=> 'AdaugareDateController@adaugare_avarie_post']);

Route::get('adaugare_utilitati', 'AdaugareDateController@adaugare_utilitati');
Route::post('adaugare_utilitati', ['as'=>'adaugare_utilitati.post','uses'=> 'AdaugareDateController@adaugare_utilitati_post']);

Route::get('adaugare_organizare', 'AdaugareDateController@adaugare_organizare');
Route::post('adaugare_organizare', ['as'=>'adaugare_organizare.post','uses'=> 'AdaugareDateController@adaugare_organizare_post']);

Route::get('adaugare_utilizatori', 'AdaugareDateController@adaugare_utilizatori');
Route::post('adaugare_utilizatori', ['as'=>'adaugare_utilizatori.post','uses'=> 'AdaugareDateController@adaugare_utilizatori_post']);

Route::get('editare_scoala', 'EditareDateController@editare_scoala');
Route::post('editare_scoala', ['as'=>'editare_scoala.post','uses'=> 'EditareDateController@editare_scoala_post']);
Route::post('stergere_scoala', 'EditareDateController@stergere_scoala');

Route::get('editare_reparatii', 'EditareDateController@editare_reparatii');
Route::post('editare_reparatie', 'EditareDateController@editare_reparatie')->name('editare_reparatie');
Route::delete('stergere_reparatie/{id}', ['as'=>'stergere_reparatie','uses'=> 'EditareDateController@stergere_reparatie']);

Route::get('editare_utilizatori', 'EditareDateController@utilizatori');
Route::delete('stergere_utilizator/{id}', ['as'=>'stergere_utilizator','uses'=> 'EditareDateController@stergere_utilizator']);


Route::get('test', 'PrimarieController@test');

Route::get('email', function(){
    Mail::send('emails', ['name' => 'Monica'], function($message)
    {
        $message->to('madi.vasi@yahoo.com', 'Ioana')->from('vasi.ioandre@gmail.com')->subject('Mwuhaha!!');
    });
});

