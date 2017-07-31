<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Nota extends Model {
        protected $connection = "alunos";

        public function getDisciplina() {
            return $this->hasOne(Disciplina::class, 'id', 'disciplina');
        }

        public function dado() {
            return $this->belongsTo(Dado::class);
        }

        public function nb($bimestre) {
            $nota = $this->nb1;
            $rec = $this->rec1;
            switch ($bimestre) {
                case 2:
                    $nota = $this->nb2;
                    break;
                case 3:
                    $nota = $this->nb3;
                    $rec = $this->rec2;
                    break;
                case 4:
                    $nota = $this->nb4;
                    $rec = $this->rec2;
                    break;
            }
            if ($this->recfinal == 1 || $rec == 1) {
                return '6.0*';
            }
            return number_format($nota / 10, 1);;
        }

        public function nf() {
            return number_format(($this->nb1 + $this->nb2 + $this->nb3 + $this->nb4) / 40, 1);
        }

    }
