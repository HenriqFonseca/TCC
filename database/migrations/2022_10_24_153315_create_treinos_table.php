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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
