<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            $pessoa[0] = new Pessoa("Lucas Montalvani", "M", 26);
            $livro[0] = new Livro("Proibido", "Tabitha", 300, $pessoa[0]);
            $livro[0]->abrir();
            $livro[0]->folhear(100);
            $livro[0]->avancarPag();

            $livro[0]->detalhes();
        ?>
    </pre>
</body>
</html>