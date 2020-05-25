<?php

class Pessoa {

    public $nome = "Flávio Ap dos Santos";
    protected $idade = 42; 
    private $senha = '123456';

    public function verPessoa()
    {
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha . '<br>';
    }
}
?>