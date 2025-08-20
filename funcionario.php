<?php

class Funcionario{
    private $nome;
    private $salario;

   public function __construct($recebenome,$recebesalario){
    $this->nome = $recebenome;
    $this->salario = $recebesalario;
   }
   public function getnome(){
     return $this->nome;
   }
   public function getsalario(){
    return $this->salario;
   }
}

class Gerente extends Funcionario{

    public function calcularBonus(){
        return $this->getsalario() * 0.20;
        
    }
    public function mostrarBonus(){
        echo "o funcionario {$this->getnome()} recebeu o bonus de:" . $this->calcularBonus() . "\n";
}
}

class Desenvolvedor extends Funcionario{
    public function calcularBonus(){
       return $this->getsalario() * 0.10;
    }
    public function mostrarBonus(){
        echo "o funcionario {$this->getnome()} recebeu o bonus de:" . $this->calcularBonus();
        }
}

$gerente = new Gerente("anderson", 3500);
echo "Nome:" . $gerente->getnome() . "\n";
echo "Salario:" . $gerente->getsalario() . "\n";
echo "Bonus:" . $gerente->calcularBonus() . "\n";
$gerente->mostrarBonus();

$desenvolvedor = new Desenvolvedor("guilherme", 2500);
echo "Nome:" . $desenvolvedor->getnome() . "\n";
echo "Salario:" . $desenvolvedor->getsalario() . "\n";
echo "Bonus:" . $desenvolvedor->calcularBonus() . "\n";
$desenvolvedor->mostrarBonus();
?>