<?php

    class Veiculo
    {
        public $modelo;
        public $cor;
        public $ano;
        
        public function Andar() 
        {
            echo "Andou<br>";
        }

        public function Parar() 
        {
            echo "Parou<br>";
        }
    }

    class Carro extends Veiculo {}

    class Moto extends Veiculo {}

    $carro1 = new Carro();
    $carro1->modelo = "Gol";
    $carro1->cor = "Verde";
    $carro1->ano = "2016";
    $carro1->Andar();

    var_dump($carro1);
    echo "<hr>";

    $moto1 = new Moto();
    $moto1->modelo = "Honda CG 150";
    $moto1->cor = "Laranja";
    $moto1->ano = "2022";
    $moto1->Parar();

    var_dump($moto1);