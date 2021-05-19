<?php

    class Bolsista extends Aluno
    {
        private $bolsa;

        public function renovarBolsa() {}

        public function pagarMensalidade()
        {
            echo "<p>Sou bolsista! Pago mensalidade com desconto.</p>";
        }
    }