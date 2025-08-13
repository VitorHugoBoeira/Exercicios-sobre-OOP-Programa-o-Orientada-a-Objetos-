<?php

class ContaBancaria{

    public $titular;
    public $saldo;

    public function Sacar($valor){
        $this->saldo -= $valor; 
    }
}

class ContaCorrente extends ContaBancaria{

    public function Sacar($valor){
        if ($this->saldo >= 5){
            $valor += 5;
            $this->saldo -= $valor; 
        }
        else{
            echo "Saldo insuficiente! Saldo na conta:" . $this->saldo;            
        }
    }
}

$contabancaria = new ContaBancaria;
$contabancaria->saldo = 100;
$contabancaria->Sacar(50);
echo $contabancaria->saldo . "\n";
$contacorrente = new ContaCorrente;
$contacorrente->saldo = 100;
$contacorrente->Sacar(50);
echo $contacorrente->saldo;

?>