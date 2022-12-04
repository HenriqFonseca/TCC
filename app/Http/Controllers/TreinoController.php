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

        $search = request('search');
        if($search){
            $aluno = User::with('treinos')->where('aluno',1)->where([['nome','like','%'.$search.'%']])->orderby('status_treino','ASC' )->get();
        }else{
            
            $aluno = User::with('treinos')->where('aluno', 1)->orderby('status_treino','ASC' )->get();
        }
        return view('treinos.listaalunos', ['aluno' => $aluno , 'search' => $search]);

        
    }

    public function create($id){
        
    }

    public function store(Request $request)
    {
        $treino = new Treino();

        $treino->descricao = $request->descricao;
        $treino->nome = $request->nome;
        $treino->user_id = $request->user_id;
        $treino->exercicio_id = $request->exercicio_id;
        $treino->serie = $request->serie;
        $treino->repeticao = $request->repeticao;
        $treino->carga = $request->carga;
        $treino->tipoTreino = $request->tipoTreino;

        $status = $treino->save();
        $treino->exercicios()->attach($treino->exercicio_id);
        $treino->users()->attach([$treino->user_id]);
        
        //  DEIXAR O STATUS TREINO ATIVADO
        if($status){
            $user1 = $treino->user_id;
            $user2 = User::all();

                foreach($user2 as $user){
                    if($user->id == $user1 && $user->status_treino == 0){
                        $user->status_treino =+ 1;
                        $user->save();
                    }
                }
        }
        return redirect()->route('treino.index');
    }
   

    public function show($id)
    {
        $user = User::where('aluno' , 1)->with('treinos')->find($id);
        $treinos = Treino::with('users', 'exercicios')->get();
        $exer = Exercicio::orderby('nome')->get();

         $teste = $user->treinos;
        return view('treinos.create', ['teste'=> $teste, 'exer'=> $exer, 'treinos' => $treinos] )->with('user', $user);


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
