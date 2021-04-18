<?php

    class Login {
        private $email;
        private $senha;
        private $nome;
        //Acessível apenas dentro do escopo da classe

        public function __construct($email, $senha, $nome) {
            $this->setEmail($email); 
            $this->setSenha($senha);
            $this->nome = $nome;
        }
        //Define os valores ao instanciar a classe

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

        public function getNome() {
            return $this->nome;
        }

        public function Logar() {
            if($this->email == "teste@teste.com" and $this->senha == "12345") {
                echo "Logado com sucesso!";
            } else {
                echo "Dados inválidos!";
            }
        }
    }

    $usuario = new Login("t/e/s/t/e@teste.com", "12345", "teste");
    
    echo 'Email: ' . $usuario->getEmail() . '<br>';
    echo 'Senha: ' . $usuario->getSenha() . '<br>';
    echo 'Nome: ' . $usuario->getNome() . '<br>';

    $usuario->Logar();
    echo "<hr>";

    $usuario2 = new Login("o/u/troteste@outro/teste.com", "54321", "outroteste");
    
    echo 'Email: ' . $usuario2->getEmail() . '<br>';
    echo 'Senha: ' . $usuario2->getSenha() . '<br>';
    echo 'Nome: ' . $usuario2->getNome() . '<br>';

    $usuario2->Logar();

