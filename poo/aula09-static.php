<?php

    class Log
    {
        public static $user;

        public static function checkLogin()
        {
            echo "O usuário " . self::$user . " está logado!<hr>";
        }

        public function sairSistema()
        {
            echo "O usuário " . self::$user . " deslogou!";
        }
    }

    Log::$user = "Admin";
    Log::checkLogin();


    $login = new Log();
    $login::$user = "gerente";
    $login::checkLogin();
    $login->sairSistema();
