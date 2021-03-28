<?php
    $password = '123456';

    $securePassword = password_hash($password, PASSWORD_DEFAULT);
    //primeiro param senha e segundo o algoritmo de encriptação

    echo $securePassword . '<hr>';
    //gera 60 ou + caracteres

    if(password_verify($password, $securePassword)) {
        echo "Senha válida";
    } else {
        echo "Senha inválida";
    }
    //Verifica a senha