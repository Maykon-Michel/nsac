<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function dado() {
        return $this->belongsToMany(Dado::class);
    }
}
