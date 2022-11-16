<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('img_path');
            $table->string('descricao');
            $table->integer('serie');
            $table->integer('repeticao');
            $table->boolean('treino_A');
            $table->boolean('treino_B');
            $table->boolean('treino_C');
            $table->boolean('treino_D');
            $table->boolean('treino_E');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('exercicio_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('exercicio_id')->references('id')->on('exercicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinos');
    }

    
};
