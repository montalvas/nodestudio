<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de sobreposicao</title>
</head>
<body>
    <pre>
        <?php

            require_once 'Mamifero.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';

            $m = new Mamifero();
            $m->setPeso(5.70);
            $m->setIdade(8);
            $m->setMembros(4);
            $m->setCorPelo("Branco");
            print_r($m);
            $m->movimentar();
            $m->alimentar();
            $m->emitirSom();
            echo "<hr>";

            $c = new Canguru();
            $c->setPeso(55.30);
            $c->setIdade(3);
            $c->setMembros(4);
            $c->setCorPelo("Marrom");
            print_r($c);
            $c->movimentar();
            $c->alimentar();
            $c->emitirSom();
            echo "<hr>";

            $k = new Cachorro();
            $k->setPeso(3.94);
            $k->setIdade(5);
            $k->setMembros(4);
            $k->setCorPelo("Preto");
            print_r($k);
            $k->movimentar();
            $k->alimentar();
            $k->emitirSom();
            $k->abanarRabo();

        ?>
    </pre>
</body>
</html>