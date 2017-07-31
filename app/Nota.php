<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function disciplina() {
        return $this->hasOne(Disciplina::class);
    }

    public function dado() {
        return $this->belongsTo(Dado::class);
    }
}
