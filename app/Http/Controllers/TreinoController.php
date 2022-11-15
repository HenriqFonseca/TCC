<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function rota_treinos_aluno()
    {
        $aluno = User::where('aluno', 1)->get();
        return view('treinos.indexprof', ['aluno' => $aluno] );
    }
    public function a()
    {
        return view('treinos.professor');
    }

    
}
