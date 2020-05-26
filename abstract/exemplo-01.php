<?php

interface Veiculo {

    public function acelerar($acelerar);

    public function frenar($frenar);

    public function trocarMacha($macha);

    public function baixarVidros($value = false);

    public function abrirPortas($value = false);
}


abstract class Automovel implements Veiculo {

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

class Civic extends Automovel {

    public function revisao(int $kilometros)
    {
        $revisaoKm = 5000 - $kilometros;
        if ($kilometros > 5000) {
            echo "Precisa fazer revisão no seu carro";
        }else{
            echo 'Não precisa da revisão agora, ainda faltam ' . $revisaoKm . 'Km/h';
        }

    }
}

$civic = new Civic();
$civic->abrirPortas(true);
$civic->revisao(4500);

?>