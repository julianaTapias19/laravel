<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //debemos crear un metodo
    public function __invoke(){
          /*return view('welcome');*/
    return "welcome to the principal page";
    }
}

/*Se escriben una serie de metodos que administran las rutas  */
