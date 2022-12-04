<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'img_path',
        'serie',
        'superior',
        'repeticao',
        'descricao',
        'img_superior',
        'img_inferior',
        'triceps',
        'biceps',
        'ombro',
        'abdomen',
    ];

    public function treinos(){
        return $this->belongsToMany(Treino::class);
    }
    
}
