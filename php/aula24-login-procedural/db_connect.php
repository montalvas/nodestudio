<?php
    //Conexão com o banco de dados

    $serverName = "localhost";
    $userName = "root";
    $password = null;
    $db_name = "loginsystem";
    //Nome do servidor, usuário de acesso e senha do PHPmyAdmin
    //db_name é o nome do meu banco de dados criado

    $connect = mysqli_connect($serverName, $userName, $password, $db_name);
    //Conecta ao banco de dados com os dados de acesso.
    
    if(mysqli_connect_error()) {
        echo "Falha na conexão: " . mysqli_connect_error();
        //verifica a conexão e emite se houver algum erro
    }
