<?php

class Usuario{

    public $nome;
    public $email;

    public function exibirInformacoes(){
        echo "usuario: " . $this->nome . "   |   " . "email: " . $this->email;
    }
}

$usuario = new Usuario();
$usuario->nome = "pedro";
$usuario->email = "pedro@exemplo.com";
$usuario->exibirInformacoes();

?>