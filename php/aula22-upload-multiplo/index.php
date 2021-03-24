<?php
    if(isset($_POST['upload'])) {
        $allowed = ["pdf", "rar", "png"];
        $count = 0;
        $amount = count($_FILES['file']['name']);
        //Quantidade de arquivos no array $_FILES

        while($count < $amount) {
            $extension = pathinfo($_FILES['file']['name'][$count], PATHINFO_EXTENSION);
        
         if(in_array($extension, $allowed)) {
            $folder = "arquivos/";
            $temp = $_FILES['file']['tmp_name'][$count];
            $renameTemp = uniqid() . ".$extension";

             if(move_uploaded_file($temp, $folder . $renameTemp)) {
                echo "Upload feito com sucesso para $folder.$renameTemp<br>";
             } else {
                 echo "Erro ao enviar o arquivo $temp";
             }

         } else {
            echo "$extension não é permitida";
         }
         
         $count++;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads Múltiplos</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple><br><br>
        <button type="submit" name="upload">Carregar</button>
    </form>
</body>
</html>