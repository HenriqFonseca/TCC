<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //===================== REGISTRAR NOVO USUARIO =====================//
    public function auth(RegisterRequest $request){

        $user = new User();

        // capturar os dados enviados pelo usuário do formulário de registro
        $user ->nome = $request->nome;
        $user ->sobrenome = $request->sobrenome;
        $user ->email = $request->email;
        $user ->cpf = $request->cpf;
        $user ->aluno = $request->aluno;
        $user ->dataNascimento = $request->dataNascimento;
        $user ->password = bcrypt($request->password);
        // salvar no banco de dados
        $user ->save();
        return redirect()->route('profile.login');

    }

    //===================== LOGIN USUARIO =====================//
    public function login(LoginRequest $request){

        //Validar os dados de login

        //Login do usuário
        if (Auth::attempt(['password' => $request->password, 'cpf'=>$request->cpf])){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }else{
            return redirect()->route('user.login')->with('logado', 'Erro ao fazer login');
        }
    }

    //===================== LOGOUT USUARIO =====================//
    public function logout(Request $request){

        // encerrar a sessãod o usário ao deslogar
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }
}
