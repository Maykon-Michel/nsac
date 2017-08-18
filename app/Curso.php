<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Curso extends Model {
        protected $connection = "public";

        public function turma() {
            return $this->belongsTo(Turma::class, 'codigo', 'turma');
        }
    }
