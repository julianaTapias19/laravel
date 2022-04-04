<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController; //especificacmos que vamos a utilizar el controlador
use App\Http\Controllers\userController;

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

Route::get('/', homeController::class ); //se copio lo que habia dentro de la funcion, la funcion se remplazo por el homeController::class
  


/*Route::get('users', function () {
    return "My one route";
});*/

/*Se definen la rutas para acceder desde el localHost a la ruta 
se definen : localhost/nombreDelArchivo/public/ruta 
 ejemplo de la ruta de arriba : localhost/projectLaravel/project/public/users  */

/*Route::get('users/{id}', function ($id) {
    /*return "It's are one and two route $id";*/
    
/*});

Route::get('usuarios/{id}/{var?}', function ($idd, $var = null) {
   if($var){
       return "three routes usuarios, $idd and $var";
   } if($var=null){
       return "Two routes users and $idd";
   }
});*/

/*Route::get('users', [userController::class, 'index']);//para poder acceder al metodo tenemos que ponerlo en un array

Route::get('users/student', [userController::class, 'userStudent']);
    


Route::get('users/{varOne}/{varTwo}',[ userController::class, 'userVars']);*/

//Forma de agrupar la rutas para evitar llamar muchas veces el mismo controlador
//Agrupacion de rutas que tienen una ruta en comun


Route::controller(userController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users/student', 'userStudent');
    Route::get('users/{varOne}/{varTwo}','userVars');
});