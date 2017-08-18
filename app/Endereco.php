<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Endereco extends Model {
        protected $connection = "alunos";
        protected $table = "endereco";

        public function getCidade() {
            return $this->hasOne(Cidade::class, 'codigo', 'cidade');
        }

        public function estado() {
            return $this->getCidade->hasOne(Estado::class, 'codigo', 'estado');
        }

        public function pais() {
            return $this->estado->hasOne(Pais::class, 'codigo', 'pais');
        }
    }
