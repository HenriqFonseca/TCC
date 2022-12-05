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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->date('dataNascimento')->nullable();
            $table->boolean('status_treino')->nullable();
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->boolean('aluno')->nullable();
            $table->boolean('professor')->nullable();
            $table->string('email')->unique();
            $table->string('imagePerfil')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
