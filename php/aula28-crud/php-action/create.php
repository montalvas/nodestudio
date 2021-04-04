<?php
    //Sessão
    session_start();

    //Conexão
    require_once 'db_connect.php';

    if(isset($_POST['new-client'])) {
        $name = mysqli_escape_string($connect, $_POST['name']);
        $lastname = mysqli_escape_string($connect, $_POST['lastname']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $age = mysqli_escape_string($connect, $_POST['age']);

        $sql = "INSERT INTO clientes VALUES (DEFAULT, '$name', '$lastname', '$email', $age)";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['message'] = "Cadastrado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = "Erro ao cadastrar";
            header('Location: ../index.php');
        }
    }