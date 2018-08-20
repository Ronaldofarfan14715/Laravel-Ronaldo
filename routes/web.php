<?php

Route::get('/', function(){

    return 'Home';

});

Route::get('/usuarios','UserController@index');


Route::get('/usuarios/{id}','UserController@show')

    ->where('id','[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}','BienvenidoUserController@UserName');

Route::get('/saludo/{name}/{nickname?}','BienvenidoUserController@UserNickName');

Route::get('/usuarios/{id}/edit','UserController@edit')->where('id','[0-9]+');