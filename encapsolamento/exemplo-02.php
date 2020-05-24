<?php
require_once('exemplo-01.php');

class Programador extends Pessoa
{
    public function verPessoa()
    {
        echo get_class($this) . '<br>';

        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha . '<br>';
    }
    
}
?>