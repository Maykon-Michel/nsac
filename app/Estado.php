<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function pais() {
        return $this->belongsTo(Pais::class, 'codigo', 'pais');
    }
    public function cidades() {
        return $this->hasMany(Cidades::class, 'estado', 'codigo');
    }
}
