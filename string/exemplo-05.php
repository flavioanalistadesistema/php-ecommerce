<?php

$frase = "Um passo a frente e você já não esta mais no mesmo lugar";

$palavra = "frente";

// $search = strpos($frase, $palavra);

// $return2 = substr($frase, 0, $search);

// echo $return2 . '<br>';

// $return2 = substr($frase, $search + strlen($palavra) , strlen($frase) );

// echo $return2 . '<br>';

// $return3 = substr($frase, $search, strlen($palavra));

echo $return3 . '<br>';

$return4 = substr($frase, 0, strpos($frase, 'f')). 'traz';

echo $return4;



?>