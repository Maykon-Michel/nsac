<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $connection = "alunos";

    public function dado() {
        return $this->belongsTo(Dado::class);
    }
}
