.<?php

$a = 10;

function trocaValor(&$b)//passagem de PARAMETRO por REFERENCIA
{
    $b += 50;
    return $b;
}
echo trocaValor($a);// 60
echo "<br>";
echo $a; // 60
/*
    Quando passamos o valor por referencia
    O valor é alterado no endereço de memória 
 */

?>