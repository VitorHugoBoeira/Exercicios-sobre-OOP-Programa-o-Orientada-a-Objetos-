<?php

class Produto{
    public $nome;
    private $preco;

    public function __construct($recebenome){
        $this->nome = $recebenome;
    }
    public function getPreco(){
        echo "o valor do produto {$this->nome} é: R$" . $this->preco;
    }
    public function setPreco($valor){
        if($valor > 0){
            $this->preco = $valor;
        }
        else{
            echo "Valor do produto nao poder ser menor que 0!";
        }
    }
}

$produto = new Produto("maçã");
$produto->setPreco(1.50);
$produto->getPreco();
?>