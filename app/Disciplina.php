<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Disciplina extends Model {
        protected $connection = "public";

        public function turmas() {
            return $this->hasMany(Turma::class,'codigo', 'turma');
        }

        public function nota() {
            return $this->belongsTo(Nota::class);
        }

        public function disciplinasAdaptacao() {
            return $this->hasOne(DisciplinaAdaptacao::class, 'disciplina', 'id');
        }
    }
