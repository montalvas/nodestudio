<?php
    // COOKIE

    $name = "Lucas Montalvani";

    setcookie('user', $name, time()+3600);
    setcookie('email', 'lucas@cookie.com', time()+3600);
    setcookie('last_search', 'ssd', time()+3600);

    var_dump($_COOKIE);

    echo '<hr>';

    echo $_COOKIE['last_search'];