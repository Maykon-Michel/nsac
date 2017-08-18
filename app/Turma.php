<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Turma extends Model {
        protected $connection = "public";

        public function curso() {
            return $this->hasOne(Curso::class, 'codigo', 'curso');
        }

        public function disciplina() {
            return $this->belongsToMany(Disciplina::class, 'turma', 'codigo');
        }
    }
