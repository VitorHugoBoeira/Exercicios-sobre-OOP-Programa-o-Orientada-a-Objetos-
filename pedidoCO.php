<?php

class Pedido{
    private $total;

    public function __construct(){
        $this->total = 0;
    }
    public function adicionarItem($preco){
        $this->total += $preco;
    }
    public function getTotal(){
        echo "o total do pedido é:R$" . $this->total;
    }
}

$pedido = new Pedido();
$pedido->adicionarItem(150);
$pedido->adicionarItem(200);
$pedido->adicionarItem(100);
$pedido->getTotal();

?>