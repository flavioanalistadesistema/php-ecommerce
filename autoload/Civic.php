<?php

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

?>