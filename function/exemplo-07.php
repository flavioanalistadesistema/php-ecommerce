.<?php

function soma(int ...$valor): string {
    
    return array_sum($valor);
}

var_dump(soma(2,3,4,5,6));// 20 string
echo "<br>";

var_dump(soma(2.6,3.4));// 5 string
echo "<br>";

var_dump(soma(5,6));// 11 string
echo "<br>";

?>
