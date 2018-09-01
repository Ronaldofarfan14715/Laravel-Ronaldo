<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){


        
        $users = DB::table('Users')->get();

        //dd($users);

        

        //PRIMERA FORMA


        $title = "Listado de usuarios";

         //SIMILAR A UN VARDUN -> dd(compact('users','title'));

         //Compact crea un array asociativo con variables y sus valores.

        return view('users.index', compact('title','users'));

        //SEGUNDA FORMA 

        /* return view('users')
            ->with('users',$users)
            ->with('title','Listado de usuarios');*/

    }


    public function show($id){

      

        return view('users.show', compact('id'));

    }

    public function create(){
        return "Crear nuevo usuario";
    }

    public function edit($id){
        return "Usuario {$id} esta editando";
    }
}
