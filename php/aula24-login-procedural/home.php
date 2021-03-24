<?php
    require_once 'db_connect.php';
    //Conexão com banco de dados

    session_start();
    //Inicia a sessão

    if(!isset($_SESSION['login'])) {
        header('Location: index.php');
    }
    //Verifica se na sessão foi feito o login, caso não o usuário é redirecionado
    //Para que a página não fique acessível através da URL

    $id = $_SESSION['id_user'];
    //pego o id do usuario que foi passado na sessão

    $sql = "SELECT * FROM users WHERE id = '$id'";
    //Comando em SQL quePega todos os dados do banco de dados com o ID passado

    $res = mysqli_query($connect, $sql);
    //Executa o comando SQL

    $data = mysqli_fetch_array($res);
    mysqli_close($connect);
    //Após a consulta, fecha a conexão com o banco de dados
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do usuário</title>
</head>
<body>
    <h1>Olá <?php echo $data['name'] ?></h1>
    <p>Seja bem-vindo!</p>
    <a href="logout.php">Logout</a>
</body>
</html>