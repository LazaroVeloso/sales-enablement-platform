<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    //
    protected $fillable = ['nome'];

    public function responsavel() {
        return $this->belongsTo(User::class, 'tipos_id');
    }

}
