<?php

class Produto{

    public $preco;

    public function AplicarDesconto(){
        return $this->preco;
    }
}

class Eletronico extends Produto{

    public function AplicarDesconto(){
        $this->preco = $this->preco * 0.9;
}
}

class Alimento extends Produto{

    public function AplicarDesconto(){
        $this->preco = $this->preco * 0.95;
    }
}

$produto = new Produto;
$produto->preco = 100;
$produto->AplicarDesconto();
echo $produto->preco . "\n";

$Eletronico = new Eletronico;
$Eletronico->preco = 100;
$Eletronico->AplicarDesconto();
echo $Eletronico->preco . "\n";

$alimento = new Alimento;
$alimento->preco = 100;
$alimento->AplicarDesconto();
echo $alimento->preco;

?>