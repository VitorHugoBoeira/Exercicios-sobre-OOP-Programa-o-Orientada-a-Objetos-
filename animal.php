<?php

class Animal {
    public $nome;
    public $especie;

    public function emitirSom(){
        echo "o animal " . $this->nome . " da especie " . $this->especie . " está emitindo um som";
    }
}

$animal = new Animal();
$animal->nome = "baleia";
$animal->especie = "mamifero";
$animal->emitirSom();
?>