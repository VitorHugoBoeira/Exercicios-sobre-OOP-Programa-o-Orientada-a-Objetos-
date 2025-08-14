<?php

class Livro{
    private $titulo;
    private $autor;

    public function __construct($autordolivro,$titulodolivro){
        $this->titulo = $titulodolivro;
        $this->autor = $autordolivro;
    }
    public function exibirdetalhes(){

        echo "O livro {$this->titulo} foi escrito por {$this->autor}";
    }
}

$paisdasmaravilha = new Livro("Daniel Moraes", "pais das maravilha");
$paisdasmaravilha->exibirdetalhes();

?>