<?php
    define("NAME", "Lucas Montalvani");
    /**
     * O primeiro param é o nome da constante
     * Sempre em maiúsculo
     * O segundo é o conteúdo da constante
     * Não preciso do $ para usar ela
     */
    echo NAME;
    echo '<hr>';

    $age = 26;
    define("AGE", $age);
    //Também posso passar variáveis como valor
    var_dump(AGE);
    echo '<hr>';