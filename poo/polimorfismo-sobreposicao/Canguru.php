<?php

    require_once 'Mamifero.php';

    class Canguru extends Mamifero
    {
        public function usarBolsa()
        {
            echo "<p>Guadar algo</p>";
        }

        public function movimentar()
        {
            echo "<p>Saltando</p>";
        }
    }