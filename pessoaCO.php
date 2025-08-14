<?php

class Pessoa{
    public $nome;
    public $idade;

    public function __construct($recebenome, $recebeidade){
        $this->nome = $recebenome;
        $this->idade = $recebeidade;
    }
   public function dizerOla(){
    echo "O {$this->nome} de {$this->idade} anos disse olá!";
   }
}

$pessoa = new Pessoa("Pedro", "14");
$pessoa->dizerOla();

?>