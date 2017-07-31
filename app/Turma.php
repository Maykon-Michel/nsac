<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public function curso() {
        return $this->hasOne(Curso::class);
    }

    public function disciplina() {
        return $this->belongsToMany(Disciplina::class);
    }
}
