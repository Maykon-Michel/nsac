<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $connection = "alunos";

    public function dados() {
        return $this->belongsToMany('App\Dado', 'matricula', 'matricula');
    }
}
