<?php
    require_once 'Controller.php';

    class remoteControl implements controller
    {
        //atríbutos
        private $volume;
        private $ligado;
        private $executando;

        //métodos da classe
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->executando = false;
        }

        private function getVolume()
        {
            return $this->volume;
        }

        private function getLigado()
        {
            return $this->ligado;
        }

        private function getExecutando()
        {
            return $this->executando;
        }

        private function setVolume($v)
        {
            $this->volume = $v;
        }

        private function setLigado($l)
        {
            $this->ligado = $l;
        }

        private function setExecutando($e)
        {
            $this->executando = $e;
        }

        public function ligar()
        {
            if($this->getLigado() == false)
            {
                $this->setLigado(true);
            }
        }

        public function desligar()
        {
            if($this->getLigado())
            {
                $this->setLigado(false);
            }
        }

        public function abrirMenu()
        {
            if($this->getLigado())
            {
                echo "<br> ---- Menu ---- <br>";
                echo "Está ligado: " . (($this->getLigado())?"Sim":"Não") . "<br>";
                echo "Está executando: " . (($this->getVolume())?"Sim":"Não") . "<br>";
                echo "Volume: " . $this->getVolume() . "<br>";
                for($i = 0; $i <= $this->getVolume(); $i+=10)
                {
                    echo "|";
                }
                echo "<br>";
            }
        }

        public function fecharMenu()
        {
            echo "<br>Fechando Menu...";
        }

        public function maisVolume()
        {
            if($this->getLigado())
            {
                $this->setVolume($this->getVolume() + 5);
            }
        }

        public function menosVolume()
        {
            if($this->getLigado())
            {
                $this->setVolume($this->getVolume - 5);
            }
        }

        public function ligarMudo()
        {
            if($this->getLigado and $this->getVolume() > 0)
            {
                $this->setVolume(0);
            }
        }

        public function desligarMudo()
        {
            if($this->getLigado() and $this->getVolume() == 0)
            {
                $this->setVolume(50);
            }
        }

        public function play()
        {
            if($this->getLigado() and !$this->getExecutando())
            {
                $this->setExecutando(true);
            }
        }

        public function pause()
        {
            if($this->getLigado() and $this->getExecutando())
            {
                $this->setExecutando(false);
            }
        }
    }