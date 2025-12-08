<?php

namespace App\Http\Controllers;

class Controller
{
    public function homepage()
    {   
        $tituloPag = "HomePage do sistema de gestão de grupos de investimento";
        return view('welcome', [
            'title' => $tituloPag,
        ]);
    }

    public function cadastrar()
    {
        return "aqui seria a tela de cadastro";
    }



    /*
    * Method user login and view
    * ===========================================
    */
    public function login()
    {   
        return view('user.login');
    }
}
