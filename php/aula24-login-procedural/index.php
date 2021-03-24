<?php
    require_once 'db_connect.php';
    //Faz acesso ao servidor, é como se copiasse o que tem no arquivo.

    session_start();
    //Inicia a sessão

    if(isset($_POST['login'])) {
        $user = mysqli_escape_string($connect, $_POST['user']);
        $password = mysqli_escape_string($connect, $_POST['password']);
        /*Faz a limpeza de caracteres especiais na string
         *Para isso necessita da conexão e da variável a ser checada 
         Funciona como o SANITIZE */
        
        if(empty($user) or empty($password)) {
            echo "<script>alert('O campo login/senha está vazio')</script>";
        } else {
            $sql = "SELECT login FROM users WHERE login = '$user'";
            //comando do banco de dados, vai verificar se existe um login na tabela

            $res = mysqli_query($connect, $sql);
            //Realiza uma consulta no banco de dados, executando o comando acima.

            if(mysqli_num_rows($res) > 0) {
                //Caso haja alguma linha na var $res, ele retornou os dados da tabela (login)

                $password = md5($password);
                //descriptografa a senha

                $sql = "SELECT * FROM users WHERE login = '$user' AND password = '$password'";
                //verifica o login e senha agora

                $res = mysqli_query($connect, $sql);

                if(mysqli_num_rows($res) == 1) {
                    $data = mysqli_fetch_array($res);
                    //Converte o resultado em um array e armazena na variável
                    //Esse array contém todos os dados da tabela

                    mysqli_close($connect);
                    //Após a consulta, fecha a conexão com o banco de dados

                    $_SESSION['login'] = true;
                    $_SESSION['id_user'] = $data['id'];
                    
                    header('Location: home.php');
                    //redireciona para a página
                } else {
                    echo "<script>alert('Usuário e senha não conferem!')</script>";
                }
            } else {
                echo "<script>alert('Usuário não existe!')</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>User Access</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Login: <input type="text" name="user"><br><br>
        Senha: <input type="password" name="password"><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>



