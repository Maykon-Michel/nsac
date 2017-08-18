<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";

    public function estados(){
        return $this->hasMany(Estados::class, 'pais', 'codigo');
    }
}
