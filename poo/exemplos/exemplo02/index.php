<html>
    <pre>
        <?php
            require_once 'Luta.php';
            require_once 'Lutador.php';
  
            //Programa principal

            $l = [];
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

            $luta1 = new Luta();
            $luta1->marcarLuta($l[2], $l[3]);
            $luta1->lutar();
            
            echo "<hr>";
            $l[2]->status();
            $l[3]->status();

        ?>
    </pre>
</html>