<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atraso extends Model
{
    protected $connection = "alunos";
    
    public function dado() {
        return $this->belongsTo('App\Dado', 'matricula');
    }
}
