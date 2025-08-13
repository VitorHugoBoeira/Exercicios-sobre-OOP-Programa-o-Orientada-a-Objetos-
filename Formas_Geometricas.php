<?php

class Forma{
    
    public function CalcularArea(){
        return 0;
    }
}

class Quadrado extends Forma{
    
    public $lado;

    public function CalcularArea(){
       return $this->lado**2;
    }
}

$quadrado = new Quadrado();
$quadrado->lado = 5;
echo $quadrado->CalcularArea();
?>