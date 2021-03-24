<?php

    /* DADOS SIMPLES */

    //String
    $name = "Here comes a string";
    var_dump($name); //Mostra informações sobre uma variável - tipo(tamanho)
    echo '<br>';

    if(is_string($name)) {
        echo "It's a string";
    } else {
        echo "It's not a string";
    }
    echo '<hr>';

    //Integer
    $age = 26;
    var_dump($age);
    echo '<br>';

    if(is_integer($age)) {
        echo "It's a integer";
    } else {
        echo "It's not a integer";
    }
    echo '<hr>';

    //Float
    $height = 1.78;
    var_dump($height);
    echo '<br>';

    if(is_float($height)) {
        echo "It's a float";
    } else {
        echo "It's not a float";
    }
    echo '<hr>';

    //Boolean
    $admin = true;
    var_dump($admin);
    echo '<br>';

    if(is_bool($admin)) {
        echo "It's a bool";
    } else {
        echo "It's not a bool";
    }
    echo '<hr>';

    /* DADOS COMPOSTOS */

    //Array
    $names = ['Lucas', 'Adriana', 'Miguel'];
    var_dump($names);
    echo '<br>';

    if(is_array($names)) {
        echo "It's a array";
    } else {
        echo "It's not a array";
    }
    echo '<hr>';


    //Object
    class Client {
        public $name;
        public function assignName($name) {
            $this->$name = $name;
        }
    }

    $client = new Client();
    $client->assignName("Lucas");
    var_dump($client);
    echo '<br>';

    if(is_object($client)) {
        echo "It's a object";
    } else {
        echo "It's not a object";
    }
    echo '<hr>';

    /* Especiais */

    //NULL
    $nothing = NULL;
    var_dump($nothing);
    echo '<hr>';

    