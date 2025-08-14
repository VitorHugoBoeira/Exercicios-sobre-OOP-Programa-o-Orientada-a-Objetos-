<?php

class Usuario{
    public $nome;
    public $email;

    public function __construct($recebenome,$recebeemail){
         $this->nome = $recebenome;
         $this->email = $recebeemail;
    }
    public function exibirInformacoes(){
        echo "O nome de usuario é: {$this->nome} \nSeu email é: {$this->email}";
    }
}

$usuario = new Usuario("Vitor", "Vitor@exemplo.com");
$usuario->exibirInformacoes();

?>