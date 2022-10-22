<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlunoAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    //===================== VEFICAÇÃO DE ALUNO =====================//
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() AND auth()->user()->aluno){
            return $next($request);
        }

        dd('vc é professor corno');
    }
}
