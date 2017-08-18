<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    protected $connection = "alunos";
    
    public function dado() {
        return $this->belongsTo('App\Dado', 'matricula', 'matricula');
    }
}
