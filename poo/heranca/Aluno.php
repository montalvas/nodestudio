<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa
    {
        private $mat, $curso;

        public function cancelarMat()
        {
            $this->setMat(false);
        }

        public function getMat()
        {
                return $this->mat;
        }

        public function setMat($mat)
        {
                $this->mat = $mat;
        }

        public function getCurso()
        {
                return $this->curso;
        }

        public function setCurso($curso)
        {
                $this->curso = $curso;
        }
    }