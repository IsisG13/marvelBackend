<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marvel extends Model
{
    protected $fillable = [
        'nome',
        'sobre',
        'filme',
        'imagem',
        'urlFilme',
        'lançamentoF',
        'serie',
        'urlSerie',
        'temporada',
        'lancamentoS',
        'imagemDetalhes',
        'sobreDetalhes',
        'sobreTrailer',
        'trailer',
        'nomeAtor',
    ];
}
