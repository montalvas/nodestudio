<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Filtro</title>
</head>
<body>
    <form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="post">
        Inteiro: <input type="text" name="number"><br><br>
        Email: <input type="text" name="email"><br><br>
        Float: <input type="text" name="float"><br><br>
        <button type="submit" name="send">Enviar</button><br><br>
    </form>
    <hr>
</body>
</html>

<?php
    /*
     * Filtra o valor recebido do input
     * tem 3 parametros: tipo de method (POST), nome do input, filtro de validação 
     */
    if(isset($_POST['send'])) {
        $erros = [];
        
        if(!($number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT))) {
            $erros[] = "$number não é um inteiro.";
        }
        
        if(!($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))) {
            $erros[] = "$email não é um email válido.";
        }

        if(!$float = filter_input(INPUT_POST, 'float', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "$float não é um float.";
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
