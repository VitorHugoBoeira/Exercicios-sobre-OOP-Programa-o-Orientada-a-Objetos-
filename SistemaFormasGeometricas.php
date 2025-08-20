<?php

abstract class Formas{

    private $nome;

    public function __construct($recebenome){
        $this->nome = $recebenome;
    }
    public function getNome(){
        return $this->nome;
    }
    abstract public function calcularArea();
    abstract public function calcularPerimetro();
}

class Circulo extends Formas{
    private $raio;

    public function __construct($receberaio){
        $this->raio = $receberaio;
    }
    public function getRaio(){
        return $this->raio;
    }
    public function calcularArea(){
        return M_PI * ($this->getRaio() ** 2);
    }
    public function calcularPerimetro(){
        return 2 * (M_PI * $this->getRaio());
    }
}

class Retangulo extends Formas{
    private $largura;
    private $altura;

    public function __construct($recebelargura,$recebealtura){
        $this->largura = $recebelargura;
        $this->altura = $recebealtura;
    }
    public function getlargura(){
        return $this->largura;
    }
    public function getaltura(){
        return $this->altura;
    }
    public function calcularArea(){
        return $this->getlargura() * $this->getaltura();
    }
    public function calcularPerimetro(){
        return 2 * ($this->getlargura() + $this->getaltura());
    }

}

$circulo = new Circulo(2);
echo number_format($circulo->calcularArea(), 2) . "\n";
echo number_format($circulo->calcularPerimetro(), 2) . "\n";

$retangulo = new Retangulo(2,2);
echo number_format($retangulo->calcularArea(), 2) . "\n";
echo number_format($retangulo->calcularPerimetro(), 2);

?>