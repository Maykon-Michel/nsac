<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $connection = "alunos";

    public function getDisciplina() {
        return $this->hasOne(Disciplina::class, 'id', 'disciplina');
    }

    public function dado() {
        return $this->belongsTo(Dado::class);
    }
}
