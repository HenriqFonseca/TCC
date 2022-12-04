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
        Schema::create('exercicios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('img_superior')->nullable();
            $table->string('img_inferior')->nullable();
            $table->boolean('superior')->nullable();
            $table->boolean('coxa')->default(false)->nullable();
            $table->boolean('panturrilha')->default(false)->nullable();
            $table->boolean('peito')->default(false)->nullable();
            $table->boolean('triceps')->default(false)->nullable();
            $table->boolean('biceps')->default(false)->nullable();
            $table->boolean('ombro')->default(false)->nullable();
            $table->boolean('abdomen')->default(false)->nullable();
            $table->boolean('costas')->default(false)->nullable();
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
        Schema::dropIfExists('exercicios');
    }
};
