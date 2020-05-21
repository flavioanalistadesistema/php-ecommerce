<?php

class Pessoa {

    public $nome;//atributo

    public function falar()//metodo
    {
        return "Meu nome é: " . $this->nome;
    }
}


$pessoa = new Pessoa();
$pessoa->nome = "Flávio Santos";
$flavio = $pessoa->falar();
echo $flavio;
?>