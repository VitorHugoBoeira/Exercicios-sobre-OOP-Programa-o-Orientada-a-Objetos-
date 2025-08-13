<?php

class Veiculo{

    public $modelo;

    public function Ligar(){
        echo "O veiculo está ligado!\n";
    }
}

class Carro extends Veiculo{

    public function AbrirPorta(){
        echo "A porta do carro foi aberta!";
    }
}

$carro = new Carro;
$carro->modelo = "fusca";
$carro->ligar();
$carro->AbrirPorta();


?>