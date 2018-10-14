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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','Users@index');
Route::get('/delete/{id}','Users@destroy')->name('delete');
Route::get('edit/{id}','Users@edit')->name('edit');
Route::post('update/{id}','Users@update')->name('update');
Route::post('add','Users@store')->name('add');

Route::redirect('/paptech','/paptechhome',301);

Route::get('/paptechhome',function (){
    echo("paptechHome");
});
