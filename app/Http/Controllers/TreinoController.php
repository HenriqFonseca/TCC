<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function rota_treinos_aluno()
    {
        return view('treinos.treinos_aluno');
    }
    public function index()
    {
        $aluno = User::where('aluno', 1)->get();
        return view('treinos.listaalunos', ['aluno' => $aluno]);
    }

    public function create($id){
        $user = User::where('aluno' , 1)->find($id);
        return view('treinos.create')->with('user', $user);
    }
}
