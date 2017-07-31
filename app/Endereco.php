<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Endereco extends Model {
        protected $connection = "alunos";

        public function dado() {
            return $this->belongsToMany(Dado::class);
        }
    }
