<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trilhas extends Model
{
    protected $fillable = [
        'titulo',
        'description',
        'data_inicio',
        'data_fim',
        'ativo'
    ];

    public function responsavel() {
        return $this->hasOne(User::class);
    }

    /*

    class Trilhas extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio',
        'data_fim',
        'ativo',
    ];

    protected $casts = [
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'ativo' => 'boolean',
    ];

    public function responsavel()
    {
        return $this->belongsTo(User::class, 'responsavel_id');
    }
}  -> mudar pra isso
    */
}
