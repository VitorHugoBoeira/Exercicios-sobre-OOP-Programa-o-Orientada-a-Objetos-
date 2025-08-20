<?php

//interface dispositivo eletrico
//define um "contrato" com os métodos que qualquer classe que a implemente deve ter.
interface DispositivoEletrico{
    public function ligar();
    public function desligar();
}

class Liquidificador implements DispositivoEletrico{
    public function ligar(){
        echo "O liquidificador está ligado.\n";
    }
    public function desligar(){
        echo "O liquidificador está desligado. \n";
    }
}
class Microondas implements DispositivoEletrico{
    public function ligar(){
        echo "O microondas está ligado.\n";
    }
    public function desligar()
    {
        echo "O microondas está desligado. \n";
    }
}

$liquidificador = new Liquidificador();
$liquidificador->ligar();
$liquidificador->desligar();

$microondas = new microondas();
$microondas->ligar();
$microondas->desligar();

?>