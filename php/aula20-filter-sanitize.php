<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de limpeza</title>
</head>
<body>
    <form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="post">
        User: <input type="text" name="user"><br><br>
        Email: <input type="text" name="email"><br><br>
        Password: <input type="text" name="password"><br><br>
        <button type="submit" name="login">Login</button><br><br>
    </form>
    <hr>
</body>
</html>

<?php
    if(isset($_POST['login'])) {
        $erros = [];
        
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING);
        //Filtra caracteres especiais e números
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        //Filtra caracteres ou números que invalidam um email
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);
        //Filtra qualquer caractere que nao seja um int

        if(empty($user)) {
            $erros[] = "Não é um usuário válido!";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Não é um e-mail válido!";
        }

        if(!filter_var($password, FILTER_VALIDATE_INT)) {
            $erros[] = "Não é uma senha numérica!";
        }

        if(!empty($erros)) {
            echo "<br>Lista de erros:<br>";
            foreach($erros as $erro) {
                echo $erro . '<br>';
            }
        } else {
            echo "<br>Nenhum erro encontrado!";
        }
    }
?>