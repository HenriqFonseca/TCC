<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioRequest;
use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercicio = Exercicio::all();
        return view('exercicio.index', ['exercicio' => $exercicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExercicioRequest $request)
    {
        $exercicio = new Exercicio();

        $exercicio->nome = $request->nome;
        $exercicio->superior = $request->superior;
        $exercicio->coxa = $request->coxa;
        $exercicio->panturrilha = $request->panturrilha;
        $exercicio->triceps = $request->triceps;
        $exercicio->biceps = $request->biceps;
        $exercicio->ombro = $request->ombro;
        $exercicio->abdomen = $request->abdomen;
        $exercicio->costas = $request->costas;
        if($exercicio->coxa == 0 && $exercicio->panturrilha == 0 && $exercicio->triceps == 0 && $exercicio->biceps == 0 && $exercicio->ombro == 0 && $exercicio->abdomen == 0 && $exercicio->costas == 0){
            return redirect()->route('exercicio.index');
        }else{

            $exercicio->save();
        }

        if($exercicio->triceps == 1 || $exercicio->biceps == 1 || $exercicio->ombro == 1 || $exercicio->costas == 1 ){
            $exercicio->superior =+ 1;
            $exercicio->save();
        }else{
            $exercicio->save();
        }
        return redirect()->route('exercicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercicio = Exercicio::findOrFail($id);
        return view('exercicio.edit', ['exercicio'=>$exercicio]);
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
        // dd($request->all());
        Exercicio::findOrFail($id)->update($request->all());
        

        return redirect()->route('exercicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exercicio::findOrFail($id)->delete();
        return redirect()->route('exercicio.index');
    }
}
