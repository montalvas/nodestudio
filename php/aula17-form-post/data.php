<?php
    /*
     * isset retorna true se a variável existe, se ele encontra o input com o nome 'send'
     * no POST eu indico o nome do input no indice
     * O método POST é indicado para enviar dados
     */
    if(isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "<h2>Dados recebidos:</h2>";
        echo "Nome: $name<br>";
        echo "Email: $email<br>";
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <a href="index.php">Retornar</a>
</body>
</html>