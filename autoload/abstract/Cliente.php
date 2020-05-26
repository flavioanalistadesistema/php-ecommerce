<?php

class Cliente extends Pessoa
{
    public function nome($nome)
    {
        return "Meu nome é " . $nome;
    }

    public function acorda()
    {
        return "Tarde";
    }

    public function trabalha()
    {
        return "autonomo";
    }
}

?>