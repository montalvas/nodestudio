<?php
    //Sessão
    session_start();

    //Conexão
    require_once 'db_connect.php';

    // Clear
    function clear($input) {
        global $connect;
        //sql
        $var = mysqli_escape_string($connect, $input);
        //xss (cross site scripting)
        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['new-client'])) {
        $name = clear($_POST['name']);
        $lastname = clear($_POST['lastname']);
        $email = clear($_POST['email']);
        $age = clear($_POST['age']);

        $sql = "INSERT INTO clientes VALUES (DEFAULT, '$name', '$lastname', '$email', $age)";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['message'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = "Erro ao cadastrar";
            header('Location: ../index.php');
        }
    }