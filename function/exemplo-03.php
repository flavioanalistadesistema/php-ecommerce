.<?php

function ola($texto, $periodo = "Bom dia")// Parametros obrigatórios devem ser os primeiros declarados
{
    $texto = !empty($texto) ? $texto.'!' : '' ;
    $periodo = !empty($periodo) ? $periodo.'!' : '' ;
    return "Olá " . $texto . ' ' . $periodo . '<br>';
}

echo ola("Flavio");
echo ola("Luciana", "Boa tarde");
echo ola("Gabriel", "Boa noite");
echo ola("Anna", "Boa noite");

?>