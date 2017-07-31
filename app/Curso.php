<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function turma() {
        return $this->belongsTo(Turma::class);
    }
}
