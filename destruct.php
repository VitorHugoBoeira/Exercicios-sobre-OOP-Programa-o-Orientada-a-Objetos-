<?php

class Arquivo {

    public $nome;

    public function __construct($nomeDoArquivo){
        $this->nome = $nomeDoArquivo;
        echo "O arquivo {$this->nome} foi Aberto.\n";
    }
    public function __destruct(){
        echo "O arquivo {$this->nome} foi fechado.";
    }
}

$arquivo = new Arquivo("Log.txt");

echo "Usando o arquivo para escrever algo.....";

?>