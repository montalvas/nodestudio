<?php

    class Pessoa
    {
        private $nome, $sexo, $idade;

        public function __construct($n, $s, $i)
        {
            $this->setNome($n);
            $this->setSexo($s);
            $this->setIdade($i);
        }

        public function fazerAni()
        {
            $this->idade++;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($n)
        {
            $this->nome = $n;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($s)
        {
            $this->sexo = $s;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($i)
        {
            $this->idade = $i;
        }
    }