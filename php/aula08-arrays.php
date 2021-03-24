<?php
    $cars = ["Eclipse", "GTO", "Lamborghini"];
    print_r($cars);
    echo '<hr>';
    /**
     * Posso definir um array de dois modos: $arr = [] ou $arr = array()
     * Para executar funções no array eu preciso usar array_algumacoisa
     */

     $cars[] = "BMW";
     var_dump($cars);
     echo '<hr>';

     // contagem de elementos do array - count
     echo count($cars);
     echo '<hr>';

    //Varrer os elementos do array
    foreach($cars as $car) {
        echo $car . '<br>';
    }
    echo '<hr>';

    //Array associativos ou dicionários
    $people = ["name" => "Lucas", "age" => 26, "height" => 1.78];
    $people["city"] = "Itabaiana";
    foreach($people as $field => $value) {
        echo $field . ' => ' . $value . '<br>';
    }
    echo '<hr>';

    //Array multidimensional
    $cores = ["vermelho" => ["claro", "escuro"], "azul" => ["claro", "escuro"]];
    foreach($cores as $cor => $value) {
        echo $cor . ': ';
        foreach($value as $tipo) {
            echo $tipo . ' ';
        }
        echo '<br>';
    }
