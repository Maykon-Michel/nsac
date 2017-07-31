<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    protected $connection = "alunos";

    public function nota() {
        return $this->hasMany(Nota::class);
    }

    public function endereco() {
        return $this->hasOne(Endereco::class);
    }

    public function matricula() {
        return $this->hasOne(Matricula::class);
    }
}
