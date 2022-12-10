<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotoRequest extends FormRequest
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
            'imagePerfil' => ['bail','required','image','mimes:png,jpg,jpeg','max:10000'],
        ];
    }

    public function messages()
    {
        return[
            'imagePerfil.image' => 'O arquivo deve ser uma imagem',
            'imagePerfil.required' => 'Erro ao enviar',
            'imagePerfil.mimes' => 'A imagem deve estar ser png, jpg ou jpeg',
            'imagePerfil.max' => 'a imagem deve ter :max kb',
            
        ];
    }
}
