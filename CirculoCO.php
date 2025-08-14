<?php

class Circulo{

public $raio;

public function __construct($receberaio){
    $this->raio = $receberaio;    
}
public function CalcularArea(){
    return number_format(M_PI * ($this->raio**2), 2);
}
public function CalcularCircunferencia(){
    return number_format((M_PI * $this->raio) * 2, 2);
}
}

$circulo = new Circulo(4);
echo $circulo->CalcularArea() . "\n";
echo $circulo->CalcularCircunferencia();

?>