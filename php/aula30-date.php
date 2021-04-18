<?php
    // Datas

    date_default_timezone_set('America/Sao_Paulo');
    //define o fuso horário correto

    echo date('d') . '<hr>';
    //Retorna dia em formato númerico

    echo date('D') . '<hr>';
    //Retorna dia em formato textual com 3 digítos

    echo date('m') . '<hr>';

    echo date ('M') . '<hr>';

    echo date('y') . '<hr>';
    // Ano com 2 dígitos

    echo date('Y') . '<hr>';
    // Ano com 4 digítos

    echo date('d/m/Y') . '<hr>';

    echo date('l') . '<hr>';;
    //dia da semana

    echo date('d/m/Y h:i:s') . '<hr>';
    //formato de 12 horas

    echo date('d/m/Y H:i:s') . '<hr>';
    //formato de 24 horas