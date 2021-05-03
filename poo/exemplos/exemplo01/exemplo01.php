<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>
<body>
<?php
    class Conta
    {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct($nc, $t, $d)
        {
            $this->setnumConta($nc);
            $this->settipo($t);
            $this->setdono($d);
            $this->status = false;
            $this->saldo = 0;
        }

        public function getnumConta()
        {
            return $this->numConta;
        }

        public function setnumConta($nc)
        {
            $this->numConta = $nc;
        }

        public function gettipo()
        {
            return $this->tipo;
        }

        public function settipo($t)
        {
            $this->tipo = $t;
        }

        public function getdono()
        {
            return $this->dono;
        }

        public function setdono($d)
        {
            $this->dono = $d;
        }

        public function abrirConta()
        {
            if($this->status == false)
            {
                $this->status = true;

                if($this->tipo == "cp")
                {
                    $this->saldo += 150;
                }
                else if($this->tipo == "cc")
                {
                    $this->saldo += 50;
                }
                else
                {
                    $this->saldo = 0;
                }

                echo "Conta aberta!<br>";
            }
            else
            {
                echo "Opção inválida!<br>";
            }
        }

        public function fecharConta()
        {
            if($this->status == true)
            {
                if($this->saldo < 0)
                {
                    echo "Regularize seus débitos antes de encerrar a conta!<br>";
                }
                else if($this->saldo > 0)
                {
                    echo "Você ainda tem R$ {$this->saldo} na sua conta. Retire para encerrar!<br>";
                }
                else
                {
                    $this->status = false;
                    echo "Conta fechada!<br>";
                }
            }
            else
            {
                echo "Opção inválida!<br>";
            }
        }

        public function sacar($s)
        {
            if($this->status == true)
            {
                if($this->saldo >= $s)
                {
                    $this->saldo -= $s;
                    echo "Você sacou R$ $s - Seu saldo é R$ {$this->saldo}<br>";
                }
                else
                {
                    echo "Saldo insuficiente!<br>";
                }
            }
            else
            {
                echo "Opção inválida, a conta está fechada!<br>";
            }
        }

        public function depositar($d)
        {
            if($this->status == true)
            {
                $this->saldo += $d;
                echo "Você depositou R$ $d - Seu saldo é R$ {$this->saldo}<br>";
            }
            else
            {
                echo "Opção inválida, a conta está fechada!<br>";
            }
        }

        public function pagarMensal()
        {
            $v = 0;
            if($this->status == true)
            {
                switch ($this->tipo)
                {
                    case "cp":
                        $v = 20;
                        if($this->saldo >= $v)
                        {
                            $this->saldo -= $v;
                            echo "Mensalidade da conta poupança paga!<br>";
                        }
                        else
                        {
                            echo "Saldo insuficiente!<br>";
                        }
                        break;
                    case "cc":
                        $v = 12;
                        if($this->saldo >= $v)
                        {
                            $this->saldo -= $v;
                            echo "Mensalidade da conta corrente paga!<br>";
                        }
                        else
                        {
                            echo "Saldo insuficiente!<br>";
                        }
                        break;
                }   
            }
            else
            {
                echo "Opção inválida, a conta está fechada!<br>";
            }
        }
    }
    $conta1 = new Conta("1", "cc", "Lucas");
    echo "Numéro da conta: {$conta1->getnumConta()}<br>";
    echo "Tipo de conta: {$conta1->gettipo()}<br>";
    echo "Dono: {$conta1->getdono()}<br>";
    $conta1->abrirConta();
    $conta1->depositar(500);
    $conta1->sacar(488);
    $conta1->pagarMensal();
    $conta1->fecharConta();
?>
</body>
</html>

    
