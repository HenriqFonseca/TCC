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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('exercicio_id')->constrained('exercicios');
            $table->string('nome');
            $table->string('img_path')->nullable();
            $table->string('descricao');
            $table->integer('serie');
            $table->integer('repeticao');
            $table->integer('carga');
            $table->boolean('treino_A')->default(false)->nullable();
            $table->boolean('treino_B')->default(false)->nullable();
            $table->boolean('treino_C')->default(false)->nullable();
            $table->boolean('treino_D')->default(false)->nullable();
            $table->boolean('treino_E')->default(false)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });

        //TABELA PIVOT TREINO/USUARIO
        Schema::create('treino_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('treino_id')->constrained('treinos');
            $table->foreignId('user_id')->constrained('users');
        });


        //TABELA PIVOT TREINO/EXERCICIO
        Schema::create('exercicio_treino', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('exercicio_id')->constrained('exercicios');
            $table->foreignId('treino_id')->constrained('treinos');
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
        Schema::dropIfExists('treino_user');
        Schema::dropIfExists('exercicio_treino');
    }

    
};
