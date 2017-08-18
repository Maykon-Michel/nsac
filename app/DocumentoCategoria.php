<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoCategoria extends Model
{
    protected $connection = "alunos";
    
    public function documentoItens() {
        return $this->hasMany('App\DocumentoItem', 'categoria');
    }
}
