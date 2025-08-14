<?php

class Retangulo{
    public $largura;
    public $altura;

    public function __construct($recebealtura, $recebelargura){
        $this->largura = $recebelargura;
        $this->altura = $recebealtura;
    }

    public function CalcularArea(){
        return $this->largura * $this->altura;
        
    }
    public function CalcularPerimetro(){
       return ($this->largura * 2) + ($this->altura * 2);
    }
}

$retangulo = new Retangulo("10","5");
echo "A área do retangulo é: " . $retangulo->CalcularArea() . "\n";
echo "O perimétro do retangulo é: " . $retangulo->CalcularPerimetro();

?>