<?php

class Conta{

    public $saldo;

    public function Adicionar($valor){
        $this->saldo += $valor;
    }
}

class ContaPoupanca extends Conta{

    public function Sacar($valor){

        if ($this->saldo >=$valor){
            $this->saldo -=$valor;
            echo "R$ " . "$this->saldo\n";
        }
        else{
            echo "Saldo insuficiente!\n";
        }
    }
}

class ContaPremium extends Conta{

    public function Sacar($valor){
        if ($this->saldo >= -1000){
            $this->saldo -= $valor;
            echo "R$ " . "$this->saldo";
        }
        else{
            echo "Saldo insuficiente!";
        }
    }
}

$contapoupanca = new ContaPoupanca;
$contapoupanca->saldo = 500;
$contapoupanca->Sacar(600);

$contapremium = new ContaPremium;
$contapremium->saldo = 500;
$contapremium->Sacar(1200);

?>