<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $usuario = User::all();
        return view('home.index', ['usuario' => $usuario]);
    }

    public function show(){
        return view('profile.login');
        
    }
    public function atrib(){
        return view('navbar-pronta.atribuicoes');
    }
}
