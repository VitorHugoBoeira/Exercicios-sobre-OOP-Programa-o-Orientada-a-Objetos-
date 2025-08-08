<?php

class Livro{
    public $titulo;
    public $autor;

    public function exibirdetalhes(){
        echo "O livro " . $this->titulo . " foi escrito pelo autor " . $this->autor;
    }
}

$livro = new Livro();
$livro->titulo = "'o espadachin'";
$livro->autor = "Daniel Rodrigues";
$livro->exibirdetalhes();

?>