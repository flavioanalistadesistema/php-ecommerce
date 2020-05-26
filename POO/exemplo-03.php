<?php

class Documento {

    private $cpf;

    public function getCpf(): string 
    {
		return $this->cpf;
	}

    public function setCpf($cpf) 
    {
        $resultado = Documento::validate($cpf);
        if ($resultado === false) {
            header("HTTP/1.1 500 Internal Server Error");
            throw new Exception("CPF invalido", 1);
        }

		$this->cpf = $cpf;
    }
    
    public function exibir()
    {
        return [
            "cpf"=> $this->getCpf()
        ];
    }

    static function validate($cpf)
    {
        // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            return false;
        }
    }

    return true;

    }
    
}

?>