<?php

class ContaBancaria{
    private $titular;
    private $saldo;

    public function __construct($recebetitular, $recebesaldoinicial){
        $this->titular = $recebetitular;
        $this->saldo = $recebesaldoinicial;
    }
    public function Depositar($valor){

        $this->saldo += $valor;

    }

    public function Sacar($valor){

        if($this->saldo >= $valor){
            $this->saldo -= $valor;
        }
        else{
            echo "Saldo insuficiente!";
        }
    }

    public function GetSaldo(){
        echo "Olá {$this->titular}\n";
        echo "O saldo atual da sua conta é de:R$" . $this->saldo;

    }
}

$contabancaria = new ContaBancaria("Vítor", 1000);
$contabancaria->Depositar(500);
$contabancaria->Sacar(1000);
$contabancaria->GetSaldo();



?>