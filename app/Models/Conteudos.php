<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conteudos extends Model
{
    //
    protected $fillable = [
        'link',
        'nome',
        'sequencia',
        'descricao',
        'formato',
    ];

    public function responsavel() {
        return $this->belongsTo(Trilhas::class, 'conteudos_id');
    }


}
