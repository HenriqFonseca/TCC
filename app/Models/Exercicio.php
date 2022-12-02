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
        'repeticao',
        'descricao',
        'img_path',
        'triceps',
        'biceps',
        'ombro',
        'abdomen',
    ];

    public function treino(){
        return $this->belongsToMany(Treino::class);
    }
    
}
