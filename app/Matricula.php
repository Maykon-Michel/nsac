<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function dado() {
        return $this->belongsTo(Dado::class);
    }
}
