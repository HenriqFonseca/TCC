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
        Schema::create('exercicio_treino', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('exercicio_id');
            $table->unsignedBigInteger('treino_id');
            $table->foreign('exercicio_id')->references('id')->on('exercicios');
            $table->foreign('treino_id')->references('id')->on('treinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercicio_treino');
    }
};
