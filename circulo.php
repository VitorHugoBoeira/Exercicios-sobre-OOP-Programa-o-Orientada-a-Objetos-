<?php

class Circulo {

    public $raio;

    public function calcularArea(){
        return M_PI * ($this->raio**2);
    }

    public function calcularCircunferencia(){
       return (2 * M_PI) * $this->raio;
    }
    public function resultado(){
        echo "A área do Raio é aproximadamente " . number_format($this->calcularArea(), 2) . " e a circunferencia é aproximadamente " . number_format($this->calcularCircunferencia(), 2);
    }
}

$circulo = new Circulo();
$circulo->raio = 3;
$circulo->resultado();

?>