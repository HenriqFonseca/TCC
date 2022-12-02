<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercicio_id',
        'descricao',
        'nome',
        'img_path',
        'serie',
        'repeticao',
        'carga',
        'treino_A',
        'treino_B',
        'treino_C',
        'treino_D',
        'treino_E',
    ];

    public function users(){
        return $this->belongsToMany(Treino::class);
    }



    public function exercicios(){
        return $this->belongsToMany(Exercicio::class);
    }

}


