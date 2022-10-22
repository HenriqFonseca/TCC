<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    //===================== REGISTRAR NOVOUSUARIO =====================//
    public function auth(Request $request){

        $user = new User();

        $user ->email = $request->email;
        $user ->cpf = $request->cpf;
        $user ->password = bcrypt($request->password);
        $user ->save();
        return redirect()->route('profile.login');

    }

    //===================== LOGIN USUARIO =====================//
    public function login(Request $request){

        if (Auth::attempt(['password' => $request->password, 'cpf'=>$request->cpf])){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }else{
            dd('não logou');
        }
    }

    //===================== LOGOUT USUARIO =====================//
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }
}
