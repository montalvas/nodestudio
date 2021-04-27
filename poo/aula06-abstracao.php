<?php
    
    abstract class Banco
    {
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function definirSaldo($s)
        {
            $this->saldo = $s;
        }

        public function mostrarSaldo()
        {
            echo "Saldo R$ " . $this->saldo . "<hr>";
        }

        abstract protected function Sacar($s);
        abstract protected function Depositar($d);
    }
    //Classe abstrata = classe modelo, não instancia
    //método abstrato não precisa de definição na classe modelo, mas exige na classe filha

    class Itau extends Banco
    {
        public function Sacar($s)
        {
            $this->saldo -= $s;
            echo "Sacou R$ $s<hr>";
        }

        public function Depositar($d)
        {
            $this->saldo += $d;
            echo "Depositou R$ $d<hr>";
        }
    }

    $itau = new Itau();

    $itau->definirSaldo(1000);
    $itau->mostrarSaldo();

    $itau->Sacar(300);
    $itau->mostrarSaldo();

    $itau->Depositar(800);
    $itau->mostrarSaldo();