<?php

//classe pai: define o que todo veiculo tem
class Veiculo{
    public $modelo;
    public $ano;

    public function ligar(){
        echo "O veículo " . $this->modelo . " está ligado!\n";
    }

    public function desligar(){
        echo "O veículo " . $this->modelo . " está desligado!\n";
    }
}

//Classe filha : A classe Carro e uma especialização da classe Veiculo
class Carro extends Veiculo{
    public $NumeroDePortas;

    public  function ligar(){
        echo "O carro de " . $this->NumeroDePortas. " do modelo " . $this->modelo . " ligou o motor\n";
    }

    public function abrirPorta(){
        echo "A porta do carro " . $this->modelo . " foi aberta!\n";
    }
}

//Instanciando um veículo
$veiculo = new Veiculo();
$veiculo->modelo = "caminhão";
$veiculo->ligar();

echo "--------------------------------\n";

$carro = new Carro();
$carro->modelo = "uno"; //atributo herdado da Classe Veiculo
$carro->NumeroDePortas = "4 portas"; // atributo especifico da Classe Carro
$carro->ligar(); //metodo sobreescrito na Classe Carro
$carro->abrirPorta(); //metodo especifico da Classe Carro
$carro->desligar(); //metodo herdado da Classe Veiculo
?>