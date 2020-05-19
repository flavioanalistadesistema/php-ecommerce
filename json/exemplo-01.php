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

echo json_encode($pessoa);
?>