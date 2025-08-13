<?php

class Transporte{

    public $capacidade;
}

class Caminhao extends Transporte{

    public function Carregar(){
        echo "O caminhão está carregando mercadorias!\n";
    }
}

class Moto extends Transporte{

    public function Empinar(){
    echo "A moto está empinando!";
    }
}

$caminhao = new Caminhao;
$caminhao->capacidade = 3;
$caminhao->Carregar();
$moto = new Moto;
$moto->capacidade = 2;
$moto->Empinar();

?>