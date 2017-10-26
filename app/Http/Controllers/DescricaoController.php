<?php

namespace App\Http\Controllers;

use App\User;


class DescricaoController 
{

    public function index()
    {
        $usuarios = User::all();
        dd($usuarios);
    }

    
}
