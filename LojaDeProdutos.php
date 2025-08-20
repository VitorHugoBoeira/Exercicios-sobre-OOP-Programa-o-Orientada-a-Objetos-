<?php

class Produtos{

    private $nome;
    private $precobase;
    private $total;
    
    public function __construct($recebenome,$precobase){
        $this->nome = $recebenome;
        $this->setPreco($precobase);
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->precobase;
    }
    public function setPreco($preco){
        if($preco > 0){
            $this->precobase = $preco;
        }
        else{
            echo "O preco do produto {$this->nome} não pode ser menor que 0!\n";
        }
    }
    public function calcularPrecoFinal(){}
    public function getTotal(){
        return $this->total;
    }
}

class Livro extends Produtos{
    public function calcularPrecoFinal(){
        return $this->getPreco() * 1.10;
     
    }
    public function exibirPreco(){
        if ($this->getPreco() > 0){
        echo "O produto " . $this->getnome() . " custa:" . $this->calcularPrecoFinal() . "\n";
        }
    }
}

class Eletronico extends Produtos{
    public function calcularPrecoFinal(){
        return $this->getpreco() * 1.15;
    }
    public function exibirPreco(){
        if ($this->getPreco() > 0){
        echo "O produto " . $this->getnome() . " custa:" . $this->calcularPrecoFinal() . "\n";
        }
    }
}

class Roupa extends Produtos{
    public function calcularPrecoFinal(){
       return $this->getpreco() * 1.05;
    }
    public function exibirPreco(){
        if ($this->getPreco() > 0){
        echo "O produto " . $this->getnome() . " custa:" . $this->calcularPrecoFinal() . "\n";
        }
    }
}

$Livro = new Livro("Alice no pais das maravilhas", 0);
$Livro->calcularPrecoFinal();
$Livro->exibirPreco();

$eletronico = new Eletronico("microondas", 0);
$eletronico->calcularPrecoFinal();
$eletronico->exibirPreco();

$roupa = new Roupa("meias", 0);
$roupa->calcularPrecoFinal();
$roupa->exibirPreco();
?>