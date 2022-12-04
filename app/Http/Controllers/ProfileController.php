<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function login(){
        return view('profile.login');
                
    }

    public function register_prof(){
        return view('profile.register_professor');
    }

    public function register_aluno(){
        return view('profile.register_aluno');
    }
    public function lista_alunos(){
        return view('treinos.listaalunos');
    }
}
