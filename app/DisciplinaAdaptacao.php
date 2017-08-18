<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplinaAdaptacao extends Model
{
    public function dados() {
            return $this->belongsToMany(Dado::class, 'matricula', 'aluno');
        }
    public function disciplina() {
        return $this->belongsTo(Disciplina::class, 'id', 'disciplina');
    }
}
