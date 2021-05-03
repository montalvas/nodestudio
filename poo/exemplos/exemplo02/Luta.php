<?php

    class Luta
    {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //getters
        private function getDesafiado()
        {
            return $this->desafiado;
        }

        private function getDesafiante()
        {
            return $this->desafiante;
        }

        private function getRounds()
        {
            return $this->rounds;
        }

        private function getAprovada()
        {
            return $this->aprovada;
        }

        //setters
        private function setDesafiado($d1)
        {
            $this->desafiado = $d1;
        }

        private function setDesafiante($d2)
        {
            $this->desafiante = $d2;
        }

        private function setRound($r)
        {
            $this->round = $r;
        }

        private function setAprovada($a)
        {
            $this->aprovada = $a;
        }

        //métodos especiais
        public function marcarLuta($l1, $l2)
        {
            if($l1->getCategoria() == $l2->getCategoria() and ($l1 !== $l2))
            {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
            else
            {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar()
        {
            if($this->getAprovada() == true)
            {
                $this->desafiado->apresentar();
                //atríbuto recebeu um objeto e esse objeto possui métodos
                $this->desafiante->apresentar();
                $vencedor = rand(0, 2);

                switch($vencedor)
                {
                    case 0: //empate
                        echo "Empatou<br>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: //ganhou desafiado
                        echo "Ganhou {$this->desafiado->getNome()}<br>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: //ganhar desafiante
                        echo "Ganhou {$this->desafiante->getNome()}<br>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                }

            }
            else
            {
                echo "Luta não pode acontecer!<br>";
            }
        }
    }

?>