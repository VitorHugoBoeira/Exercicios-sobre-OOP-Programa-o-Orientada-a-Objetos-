<?php

class Pessoa{

    public $nome;
    public $idade;

    public function correr(){
        echo "O " . $this->nome . " está correndo" . "ao seus " . $this->idade . " anos!";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Mario";
$pessoa->idade = "34";
$pessoa->correr();
?>