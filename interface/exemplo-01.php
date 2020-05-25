<?php

interface Veiculo {

    public function acelerar($acelerar);

    public function frenar($frenar);

    public function trocarMacha($macha);

    public function baixarVidros($value = false);

    public function abrirPortas($value = false);
}


class Civic implements Veiculo {

    public function acelerar($acelerar)
    {
        echo "O carro esta " . $acelerar . " Km/h";
    }

    public function frenar($frenar)
    {
        echo "O carro desacelorou " . $frenar . " Km/h";
    }

    public function trocarMacha($marcha)
    {
        echo "A macha atual é " . $marcha;
    }

    public function baixarVidros($value = false)
    {
        
        echo $value == false ? 'Vidro fechado' : 'Vidro aberto';
    }

    public function abrirPortas($value = false)
    {
        echo ($value == false ? 'Porta Fechada' : 'Porta Aberta');
    }
}

$civic = new Civic();
$civic->abrirPortas(true);
echo "<br>";
$civic->baixarVidros();
echo "<br>";
$civic->trocarMacha('N');
echo "<br>";
$civic->acelerar(0);


?>