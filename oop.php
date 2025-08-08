<?php

class Carro{

    private $modelo;
    private $cor;

    public function Ligar(){
        echo "O carro do modelo " . $this->modelo . " e da cor " . $this->cor . " Está ligado!";
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
}

$carro = new Carro();
$carro->setModelo("Ferrari");
$carro->setcor("Vermelha");
$carro->Ligar(); 

?>