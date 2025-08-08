<?php

class Pedido{
    
    private $total;

    public function adicionarItem($preco){
        return $this->total += $preco;
    }

    public function removerItem($preco){
        return $this->total -= $preco;
    }

    public function getTotal(){
        echo "O preço total do pedido é: ". $this->total;
    }
}

$pedido = new Pedido();
$pedido->adicionarItem(250);
$pedido->removerItem(100);
$pedido->getTotal();
?>