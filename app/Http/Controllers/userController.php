<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return "It's a page users ";
    }

    public function userStudent(){
        return "it's route users / student ";
    }

    public function userVars($varOne, $varTwo){
        return "it's route users / $varOne / $varTwo"; 
    }
}
