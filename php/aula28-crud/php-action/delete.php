<?php
    //Sessão
    session_start();

    //Conexão
    require_once 'db_connect.php';

    if(isset($_POST['delete-client'])) {
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM clientes WHERE id = '$id'";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['message'] = "Deletado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = "Erro ao deletar";
            header('Location: ../index.php');
        }
    }