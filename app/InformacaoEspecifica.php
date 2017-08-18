<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacaoEspecifica extends Model
{
    protected $connection = "alunos";

    public function dado() {
        return $this->belongsTo('App\Dado');
    }
}
