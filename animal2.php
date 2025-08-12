<?php

//Classe Pai
class Animal{

    public $nome;

    public function EmitirSom(){
        echo "O animal " . $this->nome . " está emitindo um som!\n"; 
    }
}

class Cachorro extends Animal{
        
    public $raca;

    public function EmitirSom(){
         echo "o cachorro " . $this->nome . " da raça " . $this->raca . " está emitindo um som!";
    }
}

$animal = new Animal();
$animal->nome = "pássaro";
echo "o nome do animal é " . $animal->nome . "\n";
$animal->EmitirSom();

echo "------------------------------------------------------\n";

$cachorro = new Cachorro();
$cachorro->nome = "Rex";
$cachorro->raca = "Pastor Alemão";
echo "o nome do cachorro é: " . $cachorro->nome . "\n";
$cachorro->EmitirSom();

?>