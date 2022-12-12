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
            'email'=> ['bail', 'required', 'unique:users,email', 'email',],
            'sexo'=> ['required'],
            'nome' => ['bail','string', 'required', 'max:20', 'regex:/^[A-Z][a-z]+/'],
            'sobrenome' => ['bail','string', 'required',  'max:30', 'regex:/^[A-Z][a-z]+/'],
            'cpf' => ['bail', 'required', 'unique:users,cpf', 'min:14', 'max:14'],
            'rg' => ['bail', 'required', 'unique:users,rg', 'min:12', 'max:12'],
            'password' => ['bail', 'required', 'min:6', 'max:20'],
            'dataNascimento' => ['bail', 'required', 'date',],
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
            'nome.regex' => 'Nome deve começar com letra maiúscula',

            //========== REGRAS DO SOBRENOME ===========//
            'sobrenome.required' => 'O Campo sobrenome é obrigatório',
            'sobrenome.string' => 'Insira um sobrenome válido',
            'sobrenome.max' => 'Insira um sobrenome válido',
            'sobrenome.regex' => 'Sobrenome deve começar com letra maiúscula',

             //========== REGRAS DO CPF ===========//
            'cpf.required' => 'Preencha o campo CPF',
            'cpf.min' => 'CPF Inválido',
            'cpf.max' => 'CPF Inválido',
            'cpf.unique' => 'CPF já está em uso',

            //========== REGRAS DO CPF ===========//
            'rg.required' => 'Preencha o campo RG',
            'rg.min' => 'RG Inválido',
            'rg.max' => 'RG Inválido',
            'rg.unique' => 'RG já está em uso',


            //========== REGRAS DA SENHA ===========//
            'password.required' => 'Preencha o campo Senha',
            'password.min' => 'A Senha deve ter no mínimo :min caracteres',
            'password.max' => 'A Senha deve ter no máximo :max caracteres',

            'dataNascimento.required' => 'Insira uma data válida',
            'dataNascimento.date' => 'Insira uma data válida',
        ];
    }
}
