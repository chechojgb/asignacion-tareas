<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class verUsu extends Controller
{
    //
    public function index(){
        $usuario = user::all();

        return  view('inicio', ['usuario' => $usuario]);
    }
}
