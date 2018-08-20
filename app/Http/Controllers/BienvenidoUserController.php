<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoUserController extends Controller
{
    public function UserNickName($name,$nickname=null){


        $name = ucfirst($name);


        return "Bienvenido {$name} tu apodo es {$nickname}";
  

    }


    public function UserName($name){
        $name = ucfirst($name);
        
        return "Bienvenido {$name}";
    }
}
