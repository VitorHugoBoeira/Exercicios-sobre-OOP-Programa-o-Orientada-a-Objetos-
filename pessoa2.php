<?php

class Pessoa{

    public $nome;

    public function dizerOla(){
        echo "O " . $this->nome . " está dizendo olá!";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Mario";
$pessoa->dizerOla();

?>