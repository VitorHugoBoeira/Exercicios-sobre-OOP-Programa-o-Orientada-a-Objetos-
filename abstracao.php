<?php

//classe abstrata animal
//define a estrutura basica de um animal, mas não pode ser instanciada
abstract class Animal{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
    public function comer(){
        echo "{$this->nome} está comendo. \n";
    }

    //metodo abstrato:classes filhas sao obrigadas a implementa-lo
    //o som que cada animal e unico
    abstract public function emitirSom();

}
class Cachorro extends Animal{
    public function emitirSom(){
        echo "O cachorro {$this->nome} está latindo!\n";
    }

}
class Gato extends Animal{
    public function EmitirSom(){
        echo "O gato {$this->nome} está miando!";
    }
}

$cachorro = new Cachorro("rex");
$cachorro->comer(); //metodo da classe abstrata
$cachorro->emitirSom(); //metedo implementado na classe cachorro
echo "\n";


$gato = new Gato("boris");
$gato->comer();//metodo da classe abstrata
$gato->emitirSom();//metedo implementado na classe gato
?>