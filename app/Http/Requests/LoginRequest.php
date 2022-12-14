<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules()
    {
        return [
            'cpf' => ['bail' , 'required', 'min:14', 'max:14'],
            'password' => ['bail', 'required', 'min:6', 'max:20'],
        ];
    }

    public function messages()
    {
        return[
            'cpf.required' => 'Preencha o campo CPF',
            'cpf.integer' => 'CPF só numeros',
            'cpf.min' => 'CPF Inválido',
            'cpf.max' => 'CPF Inválido',
            'password.required' => 'Preencha o campo Senha',
            'password.min' => 'A Senha deve ter no mínimo :min caracteres',
            'password.max' => 'A Senha deve ter no máximo :max caracteres',
        ];
    }
}
