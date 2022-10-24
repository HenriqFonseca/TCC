<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
   
    //======= VALIDAÇÃO DOS DADOS DE LOGIN==========//
    public function rules()
    {
        return [
            'cpf' => ['required', 'min:14', 'max:14'],
            'password' => ['required', 'min:8', 'max:20'],
        ];
    }




    //======= MENSAGENS DE ERRO QUE IRÃO APARAECER PARA O USUARIO ==========//
    public function messages(){
        return[
            'cpf.required' => 'Preencha o campo CPF',
            'cpf.min' => 'CPF Inválido',
            'cpf.max' => 'CPF Inválido',
            'password.required' => 'Preencha o campo Senha',
            'password.min' => 'A Senha deve ter no mínimo :min caracteres',
            'password.max' => 'A Senha deve ter no máximo :max caracteres',
        ];
    }
}
