<?php
    session_start();

    echo $_SESSION['user'] . '<br>' . $_SESSION['password'] . '<br>' . session_id();
    //session_id() mostra o ID da sessão