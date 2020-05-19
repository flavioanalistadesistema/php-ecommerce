<?php

$string = "flavio santos";
$nome = ucwords($string) ;
$pessoa = str_replace("o", "0", $nome);
$pessoa = str_replace("F", "E", $pessoa);
echo $pessoa;


?>