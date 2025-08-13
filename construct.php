<?php

class Carro{
    public $marca;

    public function __construct($MarcaDoCarro){
        $this->marca = $MarcaDoCarro;
        echo "Um carro da {$this->marca} foi montado!\n";
    }
    
}

$carro = new Carro("Ford");

echo "Meu carro é da marca: {$carro->marca}";

?>