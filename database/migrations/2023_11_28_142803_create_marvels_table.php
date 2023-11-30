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
    // 'nome',
    // 'sobre',
    // 'filme',
    // 'urlFilme',
    // 'lançamentoF',
    // 'serie',
    // 'urlSerie',
    // 'temporada',
    // 'lancamentoS',
    // 'imagemDetalhes',
    // 'sobreDetalhes',
    // 'sobreTrailer',
    // 'trailer',
    // 'nomeAtor',
    {
        Schema::create('marvels', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
            $table->string('nome');
            $table->string('sobre');
            $table->string('filme');
            $table->string('urlFilme');
            $table->string('lançamentoF');
            $table->string('serie');
            $table->string('urlSerie');
            $table->string('temporada');
            $table->string('lancamentoS');
            $table->string('imagemDetalhes');
            $table->string('sobreDetalhes');
            $table->string('sobreTrailer');
            $table->string('trailer');
            $table->string('nomeAtor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marvels');
    }
};
