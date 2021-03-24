<?php
    session_start();

    session_unset();
    //Limpa todas as variaveis da seção

    session_destroy();
    //destroi a seção, impossibilitando de mostrar as var 'user' e 'password' no home, pois ele só acessa a seção e não cria nada.