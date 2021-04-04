<?php
    //Sessão
    session_start();

    //Conexão
    require_once 'db_connect.php';

    if(isset($_POST['edit-client'])) {
        $name = mysqli_escape_string($connect, $_POST['name']);
        $lastname = mysqli_escape_string($connect, $_POST['lastname']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $age = mysqli_escape_string($connect, $_POST['age']);

        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "UPDATE clientes SET nome = '$name', sobrenome = '$lastname', email = '$email', idade = $age WHERE id = '$id'";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['message'] = "Atualizado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = "Erro ao atualizar";
            header('Location: ../index.php');
        }
    }