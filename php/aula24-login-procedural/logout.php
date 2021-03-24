<?php
    //Encerrando a sessão

    session_start();

    session_unset();
    //limpa a sessão

    session_destroy();
    //destroi a sessão

    header('Location: index.php');
    //redireciona para a página de login