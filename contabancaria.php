<?php

class ContaBancaria{

    private $saldo;

    public function setSaldo($valor){
        $this->saldo = $valor;
    }
    public function getSaldo(){
        echo "seu saldo é de " . $this->saldo;
    }
    public function sacar($valor){
        $this->saldo -= $valor;
    }
    public function depositar($valor){
        $this->saldo += $valor;
    }
        
}

$contabancaria = new ContaBancaria();
$contabancaria->setSaldo(5000);
$contabancaria->sacar(1000);
$contabancaria->depositar(500);
$contabancaria->getSaldo();
?>