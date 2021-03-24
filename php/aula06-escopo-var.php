<?php

    $name = 'Lucas Montalvani';

    function showName() {
        global $name; //tornar a variável global para acessar em um escopo local
        echo $name;
    }

    showName();
    echo '<hr>';

    function showCity() {
        global $city;
        $city = "Itabaiana";
    }

    showCity(); //Atribuo o valor à variável global antes de chama-la
    echo $city;
    echo '<hr>';

    $a = 1;
    $b = 3;
    $c = 5;

    function sum() {
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }

    sum();