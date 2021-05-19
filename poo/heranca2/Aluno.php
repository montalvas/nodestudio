<?php

    class Aluno extends Pessoa
    {
        private $matricula, $curso;

        public function pagarMensalidade() 
        {
                echo "<p>Não sou bolsista, pago mensalidade normal.</p>";
        }

        /**
         * Get the value of matricula
         *
         * @return $matricula,
         */
        public function getMatricula()
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         *
         * @param $matricula, $matricula
         *
         * @return self
         */
        public function setMatricula($matricula) : self
        {
                $this->matricula = $matricula;

                return $this;
        }

        /**
         * Get the value of curso
         *
         * @return $matricula,
         */
        public function getCurso()
        {
                return $this->curso;
        }

        /**
         * Set the value of curso
         *
         * @param $matricula, $curso
         *
         * @return self
         */
        public function setCurso($curso) : self
        {
                $this->curso = $curso;

                return $this;
        }
    }