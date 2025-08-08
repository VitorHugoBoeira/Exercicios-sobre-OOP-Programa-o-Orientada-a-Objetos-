<?php

class Produto{
    public $nome;
    private $preco;

    public function setPreco($valor){
        $this->preco += $valor;
    }
    public function getpreco(){
        return $this->preco;
    }
    public function retornar(){
       echo "o produto ". $this->nome . " tem o preço ". $this->getpreco();
    }
}

$produto = new Produto();
$produto->nome = 'redlabel';
$produto->setPreco(150);
$produto->retornar();

?>