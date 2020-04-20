<?php

use Illuminate\Http\Request;

Route::post('register','UsusariosController@register');

Route::post('login','UsusariosController@login');
Route::get('profile','UsusariosController@getAuthenticatedUser');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::resource('empleados','EmpleadosController');
Route::resource('sucursales','SucursalesController');
Route::resource('areas','AreasController');







