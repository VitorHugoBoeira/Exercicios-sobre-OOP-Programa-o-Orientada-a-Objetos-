<?php

class Animal{

public $nome;
public $especie;

public function __construct($recebenome,$recebeespecie){
    $this->nome = $recebenome;
    $this->especie = $recebeespecie;
}
public function EmitirSom(){
    echo "O animal {$this->nome} da especie {$this->especie} está Emitindo um som!";
}
}

$animal = new Animal("girafa","mamifero");
$animal->EmitirSom();

?>