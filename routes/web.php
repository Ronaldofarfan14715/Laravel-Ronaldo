<?php

Route::get('/', function(){

    return 'Home';

});

Route::get('/usuarios',function(){
    
    return 'Usuario';
});


Route::get('/usuarios/{id}', function($id){

    return "Mostrando el detalle del usuario {$id}";
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function(){
    return "Crear nuevo usuario";
});

Route::get('/usuarios/{name}/{nickname?}', function($name,$nickname= null){



    if(!$nickname){
        return "Bievenido {$name} no tienes apodo";
    }else{
        return "Bienvenido {$name} tu apodo es {$nickname}";
    }
});