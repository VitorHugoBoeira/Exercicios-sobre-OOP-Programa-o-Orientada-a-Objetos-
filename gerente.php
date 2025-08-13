<?php

class Funcionario{

    public $nome;
    public $salario;
}

class Gerente extends Funcionario{

    public $departamento;

    public function Mostrar(){
        echo "O gerente: " . $this->nome . "\nrecebe um salario de: " . $this->salario . "\ntrabalha no departamento: " . $this->departamento;
    }
}

$gerente = new Gerente();
$gerente->nome = "Rogerio";
$gerente->salario = 5230;
$gerente->departamento = "Segundo";
$gerente->Mostrar();
?>