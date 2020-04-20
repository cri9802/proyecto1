<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home','HomeController@index')->name('home');


Route::get('/login1','controlador_acceso@login')->name('login');
Route::POST('/valida','controlador_acceso@valida')->name('valida');
Route::get('/principal','controlador_acceso@principal')->name('principal');
Route::get('/cerrarsesion','controlador_acceso@cerrarsesion')->name('cerrarsesion');