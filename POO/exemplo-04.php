<?php

class Endereco {

    private $logradouro;
    private $number;
    private $city;

    public function __construct($logradouro, $number, $city)
    {
        $this->logradouro = $logradouro;
        $this->number = $number;
        $this->city = $city;
    }

    public function __destruct()
    {
        var_dump('Destruct aqui');
    }

    public function __toString()
    {
        return "Rua: " . $this->logradouro . ' ' . $this->number . ',' . $this->city;
    }
}

?>