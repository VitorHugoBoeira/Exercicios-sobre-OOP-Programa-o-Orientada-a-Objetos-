<?php

class Produto{

    private $preco;

    public function setPreco($valor){
        $this->preco = $valor;
    }
    public function getPreco(){
        return $this->preco;
    }
}

$produto = new Produto();
$produto->setPreco(100);

echo $produto->getPreco();

?>