<html>
<pre>
<?php

    class Lutador
    {
        //atríbutos
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        //Getters
        public function getNome()
        {
            return $this->nome;
        }

        public function getNacionalidade()
        {
            return $this->nacionalidade;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        public function getVitorias()
        {
            return $this->vitorias;
        }

        public function getDerrotas()
        {
            return $this->derrotas;
        }

        public function getEmpates()
        {
            return $this->empates;
        }

        //Setters

        public function setNome($n)
        {
            $this->nome = $n;
        }

        public function setNacionalidade($n)
        {
            $this->nacionalidade = $n;
        }

        public function setIdade($i)
        {
            $this->idade = $i;
        }

        public function setAltura($a)
        {
            $this->altura = $a;
        }

        public function setPeso($p)
        {
            $this->peso = $p;
            $this->setCategoria($p);
        }

        private function setCategoria($c)
        {
            if($c < 52.2)
            {
                $this->categoria = "Inválido";
            } 
            else if($c <= 70.3)
            {
                $this->categoria = "Leve";
            }
            else if($c <= 83.9)
            {
                $this->categoria = "Médio";
            }
            else if($c <= 120.2)
            {
                $this->categoria = "Pesado";
            }
            else
            {
                $this->categoria = "Inválido";
            }
        }

        public function setVitorias($v)
        {
            $this->vitorias = $v;
        }

        public function setDerrotas($d)
        {
            $this->derrotas = $d;
        }

        public function setEmpates($e)
        {
            $this->empates = $e;
        }

        //construtor
        public function __construct($n, $na, $i, $a, $p, $v, $d, $e)
        {
            $this->setNome($n);
            $this->setNacionalidade($na);
            $this->setIdade($i);
            $this->setAltura($a);
            $this->setPeso($p);
            $this->setVitorias($v);
            $this->setDerrotas($d);
            $this->setEmpates($e);
        }

        //métodos
        public function apresentar()
        {
            echo "Lutador: {$this->getNome()}<br>";
            echo "Origem: {$this->getNacionalidade()}<br>";
            echo "{$this->getIdade()} anos<br>";
            echo "{$this->getAltura()}m de altura<br>";
            echo "Pesando: {$this->getPeso()} Kg<br>";
            echo "Ganhou: {$this->getVitorias()}<br>";
            echo "Perdeu: {$this->getDerrotas()}<br>";
            echo "Empatou: {$this->getEmpates()}<br>";
            echo "<hr>";
        }

        public function status()
        {
            echo $this->getNome() . "<br>";
            echo "É um peso {$this->getCategoria()}<br>";
            echo "{$this->getVitorias()} vitórias<br>";
            echo "{$this->getDerrotas()} derrotas<br>";
            echo "{$this->getEmpates()} empates<br>";
            echo "<hr>";
        }

        public function ganharLutar()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLutar()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLutar()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }

    //Programa principal

    $l = [];
    $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

    $l[0]->apresentar();
    $l[0]->status();

?>
</pre>
</html>