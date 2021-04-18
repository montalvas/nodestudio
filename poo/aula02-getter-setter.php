<?php

    class Login {
        private $email;
        private $senha;
        //Acessível apenas dentro do escopo da classe

        public function setEmail($e) {
            $e = filter_var($e, FILTER_SANITIZE_EMAIL);
            //Filtra o valor antes de atribuir
            $this->email = $e;
        }
        //Define o valor do email

        public function getEmail() {
            return $this->email;
        }
        //Retorna o valor do email

        public function setSenha($s) {
            $this->senha = $s;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function Logar() {
            if($this->email == "teste@teste.com" and $this->senha == "12345") {
                echo "Logado com sucesso!";
            } else {
                echo "Dados inválidos!";
            }
        }
    }

    $usuario = new Login();
    
    $usuario->setEmail("tes//te@teste.com");
    $usuario->setSenha("12345");
    
    echo 'Email: ' . $usuario->getEmail() . '<br>';
    echo 'Senha: ' . $usuario->getSenha() . '<br>';
    echo "<hr>";

    $usuario->Logar();

