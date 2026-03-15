<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $table = 'site_contatos';

    // Campos que podem ser preenchidos via create() ou fill()
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato_id',
        'mensagem'
    ];
}
