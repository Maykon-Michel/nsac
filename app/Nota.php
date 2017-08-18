<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Nota extends Model {
        protected $connection = "alunos";

        public function getDisciplina() {
            return $this->hasOne(Disciplina::class, 'id', 'disciplina');
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
            if (($this->recfinal == 1 || $rec == 1) && $nota < 60) {
                return number_format(6, 1);
            }
            return number_format($nota / 10, 1);;
        }

        public function nf() {
            return number_format(($this->nb(1) + $this->nb(2) + $this->nb(3) + $this->nb(4)) / 4, 1);
        }

    }
