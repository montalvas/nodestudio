<?php

    class Pessoa {
        public $name;
        public $age;

        public function Info() {
            echo "Nome: $this->name <br>idade: $this->age<br>";
        }
    }

    $pessoa1 = new Pessoa();
    $pessoa1->name = "Lucas Montalvani";
    $pessoa1->age = 26;
    $pessoa1->Info();
    echo "<hr>";

    $pessoa2 = new Pessoa();
    $pessoa2->name = "Miguel Montalvani";
    $pessoa2->age = 3;
    $pessoa2->Info();