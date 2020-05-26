<?php

/**
 * Metodo POLIMORFISMO
 * Basicamente é ter os mesmo métodos na classe PAI e classe FILHA
 * Que fazem coisas distintas
 */

abstract class Animals
{
    public function falar()
    {
        return "Falar";
    }

    public function mover()
    {
        return "Anda";
    }

    public function alimento()
    {
        return "Comida";
    }
}

class Macaco extends Animals
{
    public function falar()
    {
        return "Mudo";
    }

    public function mover()
    {
        return "Pula e " . parent::mover();
    }
}

class Cachorro extends Animals
{
    public function mover()
    {
        return "Corre e " . parent::mover();
    }

    public function alimento()
    {
        return "Ração";
    }
}

class Passaro extends Animals
{
    public function mover()
    {
        return "Voa e " . parent::mover();
    }

    public function alimento()
    {
        return 'Sementes';
    }

}

$chimpaze = new Macaco();
echo $chimpaze->falar() . '<br>';
echo $chimpaze->mover() . '<br>';
echo '*************************<br>';

$pluto = new Cachorro();
echo $pluto->falar() . '<br>';
echo $pluto->alimento() . '<br>';
echo $pluto->mover() . '<br>';
echo '*************************<br>';

$ave = new Passaro();
echo $ave->falar() . '<br>';
echo $ave->alimento() . '<br>';
echo $ave->mover() . '<br>';
echo '*************************<br>';


?>