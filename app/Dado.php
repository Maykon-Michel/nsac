<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    public function nota() {
        return $this->hasMany(Nota::class);
    }

    public function endereco() {
        return $this->hasOne(Endereco::class);
    }
}
