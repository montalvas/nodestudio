<html>
<pre>
<?php

    require_once 'Aluno.php';
    require_once 'Professor.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();

    $p1->setNome("Falcon");
    $p2->setNome("Tom");
    $p3->setNome("Quagmire");

    print_r($p1);
    print_r($p2);
    print_r($p3);

?>
</pre>
</html>