<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Dado extends Model {
        protected $connection = "alunos";

        public function notas() {
            return $this->hasMany(Nota::class, 'aluno', 'matricula');
        }

        public function endereco() {
            return $this->hasOne(Endereco::class);
        }

        public function matricula() {
            return $this->hasOne(Matricula::class);
        }
    }
