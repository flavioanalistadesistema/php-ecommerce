<?php
require_once('../POO/exemplo-03.php');

Class Documents {

    private $number;

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }
}

class CPF extends Documents {

    public function validar(): bool
    {
        $validateCpf = new Documento();
        $numberCpf = $this->getNumber();
        
        return $validateCpf->validate($numberCpf);
    }
}

$cpf = new CPF();
$cpf->setNumber('28023154801');
var_dump($cpf->validar());
echo '<br>';
echo $cpf->getNumber();



?>