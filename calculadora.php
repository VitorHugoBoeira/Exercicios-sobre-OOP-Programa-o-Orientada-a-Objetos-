<?php

class Calculadora{

    public function somar($a,$b){
        return $a + $b;
    }
    public function subtrair($a,$b){
        return $a - $b;
    }
    public function multiplicar($a,$b){
        return $a * $b;
    }
    public function dividir($a,$b){
        return $a / $b;
    }
}

$calcular = new Calculadora();
echo $calcular->somar(3,3) . "\n";
echo $calcular->subtrair(3,3) . "\n";
echo $calcular->multiplicar(3,3) . "\n";
echo $calcular->dividir(3,3) . "\n";
?>