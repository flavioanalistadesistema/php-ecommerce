.<?php

$pessoa = [
    'nome' => 'Flávio',
    'idade' => 20
];

foreach ($pessoa as &$value) { // & pega o endereço na memmoria 
    if (gettype($value) === 'integer') $value += 10;
    echo $value . '<br>';// 30
}

print_r($pessoa);// 30

?>
