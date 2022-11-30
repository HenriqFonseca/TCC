<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use App\Models\Treino;
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
        
    }

    public function store(Request $request)
    {
        $treino = new Treino();

        $treino->descricao = $request->descricao;
        $treino->nome = $request->nome;
        $treino->user_id = $request->user_id;
        $treino->serie = $request->serie;
        $treino->repeticao = $request->repeticao;
        $treino->carga = $request->carga;
        $treino->treino_A = $request->treino_A;
        $treino->treino_B = $request->treino_B;
        $treino->treino_C = $request->treino_C;
        $treino->treino_D = $request->treino_D;
        $treino->treino_E = $request->treino_E;

        $treino->save();
        redirect()->route('treino.index');
    }
   

    public function show($id)
    {
        $user = User::where('aluno' , 1)->find($id);
        $treinos = Treino::all();
        $exercicios = Exercicio::all();
        return view('treinos.create', ['exercicios' => $exercicios, 'treinos' => $treinos] )->with('user', $user);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
