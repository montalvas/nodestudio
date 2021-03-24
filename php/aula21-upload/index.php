<?php
    if(isset($_POST['upload'])) {
        $allowed = ["png", "jpeg", "jpg", "gif"];
        $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        /**
         * pathinfo retorna informações sobre o caminho do arquivo
         * primeiro parâmetro é nome do arquivo, acessando o array no input "file" e pegando seu "name"
         * segundo parametro busca a extensão desse arquivo
         */
        
         if(in_array($extension, $allowed)) {
            $folder = "arquivos/";
            //nome da pasta arquivos na pasta upload, onde será salvo o arquivo.
            $temp = $_FILES['file']['tmp_name'];
            //Pega o arquivo temporário
            $renameTemp = uniqid() . ".$extension";
            /**
             * uniqid retorna um identificador baseado no tempo (um nome aleatório)
             * que será concatenado com . e a extensão do arquivo
             */

             if(move_uploaded_file($temp, $folder . $renameTemp)) {
                $message = "Upload feito com sucesso!";
             } else {
                 $message = "Não foi possível fazer upload!";
             }
             /**
              * Essa função move um arquivo de upload
              * O primeiro parametro será o arquivo temporário
              * O segundo parametro é o local, será na pasta informada na variavel
              Concatenada com o nome do arquivo temporário
              Ex: Será salvo em arquivo/nome-aleatorio.png
              Ele será renomeado automaticamente
              */
         } else {
            $message = "Formato inválido!";
         }
         //Verifica se a extensão existe no array de formatos permitidos

         echo $message;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivo</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <!--É necessário ter o enctype no form para funcionar o uplod.-->
        <input type="file" name="file"><br><br>
        <button type="submit" name="upload">Enviar</button>
    </form>
</body>
</html>