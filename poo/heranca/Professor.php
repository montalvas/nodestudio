<?php

    class Professor extends Pessoa
    {
        private $especialidade, $salario;

        public function receberAum($a)
        {
            $this->setSalario($this->getSalario() + $a);
        }

        public function getSalario()
        {
                return $this->salario;
        }

        public function setSalario($salario)
        {
                $this->salario = $salario;
        }

        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;
        }
    }