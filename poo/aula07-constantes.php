<?php

    class Pessoa
    {
        const name = "Lucas";

        public function showName()
        {
            echo "Meu nome é " . self::name;
        }
    }

    class Lucas extends Pessoa
    {
        const name = "Montalvani";

        public function showName()
        {
            echo "Meu nome é " . self::name . "<br>";
        }

        public function showOldName()
        {
            echo "Meu nome era " . parent::name;
        }
    }

    $lucas = new Lucas();
    $lucas->showName();
    $lucas->showOldName();