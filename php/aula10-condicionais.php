<?php
    //IF - IF ELSE - ELSE
    $num = 10;

    if($num % 2 == 0) {
        echo 'É um número par!';
    } else if($num % 2 == 1) {
        echo 'É um número impar!';
    } else {
        echo 'É um número nulo!';
    }
    echo 'hr';

    //ternário (condição) ? true : false
    $media = 7;

    echo ($media >=7) ? "Aprovado!" : "Reprovado";
    echo 'hr';

    //switch - case
    $color = "red";

    switch($color) {
        case "red" :
            echo "Your color is red!";
            break;
        case "green" :
            echo "Your color is green!";
            break;
        case "blue" :
            echo "Your color is blue!";
            break;
        default :
            echo "Your color is another";
        
    }