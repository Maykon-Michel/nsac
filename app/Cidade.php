<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $connection = "public";

    public function estado (){
        return $this->belongsTo(Estado::class, 'codigo', 'estado');
    }
}
