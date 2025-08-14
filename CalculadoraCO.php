<?php

class Calculadora{

    public function __construct(){
        
    }

    public function somar($a, $b){
        return $a + $b;
    }

    public function subtrair($a, $b){
        return $a - $b;
    }

    public function multiplicar($a,$b){
        return $a * $b;
    }

    public function dividir($a,$b){
        return $a / $b;
    }
}

$calculadora= new Calculadora();
echo $calculadora->somar(2,2) . "\n";
echo $calculadora->subtrair(2,2) . "\n";
echo $calculadora->multiplicar(2,2) . "\n";
echo $calculadora->dividir(2,2);
?>