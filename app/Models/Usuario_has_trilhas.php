<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario_has_trilhas extends Model
{
    //

    protected $fillable = [
        'usuarios_id',
        'tabela_id'
    ];

}
