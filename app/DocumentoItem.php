<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoItem extends Model
{
    protected $connection = "alunos";
    
    public function documentoCategorias() {
        return $this->belongsToMany('App\DocumentoCategoria', 'codigo');
    }
}
