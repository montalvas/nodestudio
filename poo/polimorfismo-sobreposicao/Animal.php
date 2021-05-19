<?php

    abstract class Animal
    {
        protected $peso, $idade, $membros;

        public abstract function movimentar();

        public abstract function alimentar();

        public abstract function emitirSom();

        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso)
        {
                $this->peso = $peso;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
        }

        public function getMembros()
        {
                return $this->membros;
        }

        public function setMembros($membros)
        {
                $this->membros = $membros;
        }
    }