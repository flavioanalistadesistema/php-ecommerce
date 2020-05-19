<?php
$pessoa = array();

array_push($pessoa, array(
    'nome' => 'Flavio',
    'idade' => 42
));

array_push($pessoa, array(
    'nome' => 'Luciana',
    'idade' => 42
));

array_push($pessoa,  'SANTOS' );

print_r($pessoa);
echo "<br>";
echo end($pessoa);
?>