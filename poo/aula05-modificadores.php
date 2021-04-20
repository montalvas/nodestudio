<?php
    class Pessoa
    {
       public $nome;
       protected $idade;
       private $sexo;
       private $teste;
       

       public function definirIdade($i)
       {
            $this->idade = $i;
       }

       public function mostrarIdade()
       {
           echo "Idade: " . $this->idade . "<hr>";
       }

       public function definirSexo()
       {
            $this->sexo = "M";
       }

       private function mostrarSexo()
       {
           echo "Sexo: " . $this->sexo . "<hr>";
       }
    }

    $exemplo1 = new Pessoa();
    $exemplo1->nome = "Lucas";
    echo "Nome: " . $exemplo1->nome . "<hr>";
    //Public é acessível em qualquer instância (dentro e fora da classe)

    $exemplo1->definirIdade("26");
    $exemplo1->mostrarIdade();
    //Protected somente é acessível dentro da classe e das classes filhas

    class Pessoa2 extends Pessoa {};

    $exemplo2 = new Pessoa2();
    $exemplo2->definirIdade("3");
    $exemplo2->mostrarIdade();
    //As classes filhas também podem acessar o protected

    class Pessoa3 extends Pessoa {};
    
    $exemplo3 = new Pessoa3();
    $exemplo3->definirSexo();
    
    /* Exemplo com private
    $exemplo3->mostrarSexo();
    

    $exemplo4 = new Pessoa();
    $exemplo4->teste = "teste";
    echo $exemplo4->teste;
    */
    

