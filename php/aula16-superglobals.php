<?php
    $x = 10;
    $y = 15;

    function sum() {
        echo $GLOBALS['x'] + $GLOBALS['y'];
        //$GLOBALS é um array que armazena todas as variaveis existentes, acessadas pelo 'indice'
    }

    sum();
    echo '<hr>';

    echo $_SERVER['PHP_SELF'] . '<br>';
    //Retorna o diretório e o nome do arquivo do php
    echo $_SERVER['SERVER_NAME'] . '<br>';
    //Retorna o nome do servidor
    echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
    //Todo o caminho do arquivo
    echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
    //Diretório raiz do server
    echo $_SERVER['SERVER_PORT'] . '<br>';
    //Mostra a porta utilizada pelo servidor
    echo $_SERVER['REMOTE_ADDR'] . '<br>';
    //Endereço ip