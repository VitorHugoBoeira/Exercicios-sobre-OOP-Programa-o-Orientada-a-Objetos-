<?php

class Animal{

    public function Mover(){
        echo "O animal está se movendo!\n";
    }
}

class Peixe extends Animal{

    public function Mover(){
        echo "O peixe está nadando!\n";
    }
}

class Passaro extends Animal{
    
    public function Mover(){
        echo "O pássaro está voando!";
    }
}

$animal = new Animal;
$animal->Mover();

$peixe = new Peixe;
$peixe->Mover();

$passaro = new Passaro;
$passaro->Mover();
?>