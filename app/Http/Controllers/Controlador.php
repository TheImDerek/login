<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function verificacion(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'f.franco.derek' && $pass == 'asdfgmovieelm1234'){
            $url = 'accesocorrecto';
        } else {
           $url= 'formulario';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('formulario');
    }
}
