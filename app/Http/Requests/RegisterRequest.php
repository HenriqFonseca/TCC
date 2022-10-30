<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
     //===================== REGRAS QUE DETERMINAM UM ERRO =====================//
    public function rules()
    {
        return [
            'email'=> ['required', 'unique:users,email', 'email'],
            'nome' => ['required', 'string', 'max:20'],
            'sobrenome' => ['required', 'string', 'max:30'],
            'cpf' => ['required', 'unique:users,cpf', 'min:14', 'max:14'],
            'password' => ['required', 'min:6', 'max:20'],
        ];
    }
     //========== MESNAGENS QUE SERÃO EXIBIDAS CASO O ERRO OCORRA ============//
    public function messages()
    {
        return[
            //========== REGRAS DO EMAIL ===========//
            'email.required' => 'O Campo email é obrigatório',
            'email.unique' => 'Email já utilizado',
            'email.email' => 'Insira um email válido',
            
            //========== REGRAS DO NOME ===========//
            'nome.required' => 'O Campo nome é obrigatório',
            'nome.string' => 'Insira um nome válido',
            'nome.max' => 'Insira um nome válido',

            //========== REGRAS DO SOBRENOME ===========//
            'sobrenome.required' => 'O Campo sobrenome é obrigatório',
            'sobrenome.string' => 'Insira um sobrenome válido',
            'sobrenome.max' => 'Insira um sobrenome válido',

             //========== REGRAS DO CPF ===========//
            'cpf.required' => 'Preencha o campo CPF',
            'cpf.integer' => 'CPF só numeros',
            'cpf.min' => 'CPF Inválido',
            'cpf.max' => 'CPF Inválido',
            'cpf.unique' => 'CPF já está em uso',


            //========== REGRAS DA SENHA ===========//
            'password.required' => 'Preencha o campo Senha',
            'password.min' => 'A Senha deve ter no mínimo :min caracteres',
            'password.max' => 'A Senha deve ter no máximo :max caracteres',
        ];
    }
}
