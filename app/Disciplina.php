<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model {
    protected $connection = "public";

    public function turma() {
        return $this->hasMany(Turma::class);
    }

    public function nota() {
        return $this->belongsTo(Nota::class);
    }
}
