<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',64);
            $table->float('valor_original',10,2);
            $table->dateTime('data_original');
            $table->float('valor_pgmt',10,2)->nullable();
            $table->dateTime('data_pgmt')->nullable();
            $table->string('descricao')->nullable();
            $table->string('pdf')->nullable();
            $table->integer('categoria_id');
            $table->integer('periodicidade_id');
            $table->integer('situation_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('periodicidade_id')->references('id')->on('periodicidades');
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
