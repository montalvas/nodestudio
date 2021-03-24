<?php

    /**
     * Session funciona para sistema de login, carrinho de compras
     * É um array global que armazena variáveis e pode ser acessado em qualquer página com o session_start()
     * 
     */
    
    session_start();

    $_SESSION['user'] = "Lucas";
    $_SESSION['password'] = "1234";

    echo $_SESSION['user'] . '<br>' . $_SESSION['password'];