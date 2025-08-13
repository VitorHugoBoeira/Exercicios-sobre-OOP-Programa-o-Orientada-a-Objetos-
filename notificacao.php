<?php

class Notificacao{

    public function Enviar(){
        echo "Enviando notificação genérica!\n";
    }
}

class Email extends Notificacao{

    public function Enviar(){
        echo "Enviando E-mail...\n";
    }
}

class SMS extends Notificacao{

    public function Enviar(){
        echo "Enviando SMS...";
    }
}

$notificacao = new Notificacao;
$notificacao->Enviar();

$email = new Email;
$email->Enviar();

$sms = new SMS;
$sms->Enviar();

?>