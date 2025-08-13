<?php

class Animal{

    public $nome;

    public function EmitirSom(){
        echo "O animal faz um som";
    }
}

class Cachorro extends Animal{
    public $raca;

    public function EmitirSom(){
        echo "o cachorro ". $this->nome ." late:Au au!";
    }
}

$cachorro = new Cachorro();
$cachorro->nome = "Rex";
$cachorro->EmitirSom();
?>