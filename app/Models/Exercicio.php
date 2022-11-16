<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'perna',
        'triceps',
        'biceps',
        'ombro',
        'abdomen',
    ];

    public function treino(){
        return $this->belongsTo(Treino::class);
    }
}
