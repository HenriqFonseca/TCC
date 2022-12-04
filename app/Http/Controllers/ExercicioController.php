<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        $exercicio = new Exercicio();

        $exercicio->nome = $request->nome;
        $exercicio->perna = $request->perna;
        $exercicio->superior = $request->superior;
        $exercicio->triceps = $request->triceps;
        $exercicio->biceps = $request->biceps;
        $exercicio->ombro = $request->ombro;
        $exercicio->abdomen = $request->abdomen;
        $exercicio->costas = $request->costas;
        $teste = $exercicio->save();

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
