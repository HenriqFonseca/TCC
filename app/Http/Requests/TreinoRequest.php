<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreinoRequest extends FormRequest
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
            'exercicio_id' => ['required'],
            'nome'=> ['bail', 'required', 'string'],
            'descricao' =>['bail', 'required', 'string'],
            'serie' =>['bail', 'required', 'integer'],
            'repeticao' =>['bail', 'required', 'integer'],
            'carga' =>['bail', 'integer'],
        ];
    }
    public function messages()
    {
        return[
            'nome.required' => 'Campo obrigatório!',
            
            'descricao.required' => 'Campo obrigatório!',
            
            'serie.required' => 'Campo obrigatório!',
            'serie.integer' => 'Insira o número de séries',
            
            'carga.required' => 'Campo obrigatório!',
            'carga.integer' => 'Insira a quantidade de carga',

            'repeticao.required' => 'Campo obrigatório!',
            'repeticao.integer' => 'Insira o número de repetições',
        ];
    }
}
