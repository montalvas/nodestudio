<?php
    $name = 'Lucas Montalvani';
    echo "Name: $name<br>";

    $upperName = strtoupper($name);
    echo "Name to Upper: $upperName<br>";

    $lowerName = strtolower($upperName);
    echo "Name to lower: $lowerName<br>";
    echo '<hr>';

    $message = 'Hello World';
    echo $message . '<br>';
    $partMessage = substr($message, 0, 5);
    // (String, caractere que inicia, quantidade de caracteres)
    echo "Parte da mensagem: $partMessage<br>";
    echo '<hr>';

    $object = "mouse";
    $newObject = str_pad($object, 10, '=', STR_PAD_BOTH);
    /**
     * Primeiro parametro é a string
     * Segundo é a quantidade final de caracteres
     * Se não preencher o terceiro param ele adciona espaços vazios
     * Quarto param determina em quais lados vao ser adicionados os caracteres
     */
    echo $newObject;
    echo '<hr>';

    $string = str_repeat("Você é bem-sucedido!<br>", 10);
    // Repete a palavra N vezes
    echo $string;
    echo '<hr>';

    $text = "Eu sou feliz e bem-sucedido!";
    echo strlen($text);
    //Mostra o tamanho da string
    echo "<hr>";

    $text1 = "Lucas é Montalvani";
    $text2 = str_replace("Lucas", "Miguel", $text1);
    // Substitui a palavra na string
    echo $text2;
    echo '<hr>';

    $text3 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    echo $text3 . '<br>';
    $text4 = strpos($text3, "printing");
    echo "A posição da palavra 'printing' é $text4";

