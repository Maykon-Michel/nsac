<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Dado extends Model {
        protected $connection = "alunos";

        public function notas() {
            return $this->hasMany(Nota::class, 'aluno');
        }

        public function getEndereco() {
            return $this->hasOne(Endereco::class, 'codigo', 'endereco');
        }

        public function getMatricula() {
            return $this->hasOne(Matricula::class, 'aluno');
        }

        public function atrasos() {
            return $this->hasMany(Matricula::class, 'aluno');
        }

        public function documento() {
            return $this->hasOne('App\Documento', 'aluno'); 
        }

        public function idioma() {
            return $this->hasOne('App\Idioma', 'matricula'); 
        }

        public function informacaoEspecifica() {
            return $this->hasOne('App\Idioma', 'matricula'); 
        }

        public function disciplina() {
            return $this->hasOne(Disciplina::class, 'aluno', 'matricula'); 
        }

        public function getPai() {
            return $this->hasOne(Pai::class, 'codigo', 'pai');
        }

        public function getMae() {
            return $this->hasOne(Pai::class, 'codigo', 'mae');
        }
    }
