<?php

    echo "<h1>Criptografia</h1>";   

    $password = "root";
    $newPassword = base64_encode($password);
    //base64 é o único que permite criptografar e descriptografar uma senha

    echo "base64: $newPassword<br>";
    echo 'Sua senha é: ' . base64_decode($newPassword);
    echo '<hr>';

    echo 'md5: ' . md5($password) . '<hr>';
    //para o md5 eu preciso comprar as senha criptografadas para saber se são iguais.
    //Não descriptografa

    echo 'sha1: ' . sha1($password) . '<hr>';

    $securityPassword = password_hash($password, PASSWORD_DEFAULT);
    //Senha segura
    echo $securityPassword;
