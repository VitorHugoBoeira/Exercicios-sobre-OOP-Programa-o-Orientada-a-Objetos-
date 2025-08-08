<?php

class Retangulo{

    public $largura;
    public $altura;

    public function calcularArea(){
        return $this->largura * $this->altura;
    }
    public function calcularPerimetro(){
      return 2 *($this->largura + $this->altura);
    }
    public function resultado(){
        echo "A área do retangulo é " . $this->calcularArea() . " e seu perimetro é " . $this->calcularPerimetro();
    }
}   

$rentagulo = new Retangulo();
$rentagulo->altura = 2;
$rentagulo->largura = 2;
$rentagulo->resultado();
?>