<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paise extends Model
{
    public function estados(){
        return $this->hasMany(Estados::class, 'pais', 'codigo');
    }
}
