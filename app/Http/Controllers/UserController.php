<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //===================== REGISTRAR NOVO USUARIO =====================//
    public function auth(Request $request){

        $user = new User();

        // capturar os dados enviados pelo usuário do formulário de registro
        $user ->email = $request->email;
        $user ->cpf = $request->cpf;
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
            dd('não logou');
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
