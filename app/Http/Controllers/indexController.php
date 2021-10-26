<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function dashboard(){
 
        $route = session('role');

        if(is_string($route) == false){

            return view('index');
            
        }

        redirect($route);

    }
}
