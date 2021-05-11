<?php

    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao
    {
        private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

        public function __construct($t, $a, $tot, $l)
        {
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTotPaginas($tot);
            $this->setAberto(false);
            $this->setPagAtual(0);
            $this->setLeitor($l);
        }

        public function detalhes()
        {
            echo "Livro: '{$this->getTitulo()}', escrito por {$this->getAutor()}<br>";
            echo "Páginas: {$this->getTotPaginas()}, página atual: {$this->getPagAtual()}<br>";
            echo "Lido por {$this->getLeitor()->getNome()}";
        }

        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor)
        {
                $this->autor = $autor;
        }

        public function getTotPaginas()
        {
                return $this->totPaginas;
        }

        public function setTotPaginas($totPaginas)
        {
                $this->totPaginas = $totPaginas;
        }

        public function getPagAtual()
        {
                return $this->pagAtual;
        }

        public function setPagAtual($pagAtual)
        {
                $this->pagAtual = $pagAtual;
        }

        public function getAberto()
        {
                return $this->aberto;
        }

        public function setAberto($aberto)
        {
                $this->aberto = $aberto;
        }

        public function getLeitor()
        {
                return $this->leitor;
        }

        public function setLeitor($leitor)
        {
                $this->leitor = $leitor;
        }

        //abstract

        public function abrir()
        {
            if($this->getAberto() == false)
            {
                $this->setAberto(true);
            }
        }

        public function fechar()
        {
            if($this->getAberto() == true)
            {
                $this->setAberto(false);
            }
        }

        public function folhear($p)
        {
            if($p > $this->getTotPaginas())
            {
                $this->setPagAtual(0);
            }
            else
            {
                $this->setPagAtual($p);
            }
        }

        public function avancarPag()
        {
            if($this->getPagAtual() < $this->getTotPaginas())
            {
                $this->pagAtual++;
            }
        }

        public function voltarPag()
        {
            if($this->getPagAtual() > 0)
            {
                $this->pagAtual--;
            }
        }
    }