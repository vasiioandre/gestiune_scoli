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

Route::get('home', 'HomeController@index');
Route::get('logout', 'HomeController@Logout');

Route::get('istoric', 'ScoalaController@istoric_get');
Route::post('istoric', 'ScoalaController@istoric');

Route::get('contact', 'ScoalaController@contact');

Route::get('cladiri_arondate', 'PrimarieController@cladiri_arondate');
Route::get('reparatii', 'PrimarieController@reparatii');



Route::get('adaugare_scoala', 'AdaugareDateController@adaugare_scoala');
//Route::get('adaugare_istoric', 'PrimarieController@adaugare_istoric');
//Route::post('store', 'PrimarieController@store');
Route::get('adaugare_cladire', ['as'=>'adaugare_cladire','uses'=>'AdaugareDateController@adaugare_cladire']);
Route::post('adaugare_cladire', ['as'=>'adaugare_cladire.post','uses'=> 'AdaugareDateController@adaugare_cladire_post']);

Route::get('image-upload',['as'=>'image.upload','uses'=>'AdaugareDateController@imageUpload']);
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'AdaugareDateController@imageUploadPost']);



Route::get('test', 'PrimarieController@test');

Route::get('email', function(){
    Mail::send('emails', ['name' => 'Monica'], function($message)
    {
        $message->to('madi.vasi@yahoo.com', 'Ioana')->from('vasi.ioandre@gmail.com')->subject('Mwuhaha!!');
    });
});

