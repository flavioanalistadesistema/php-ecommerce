<?php

$data = [
    'username' => 'flaaps',
    'password' => '123456'
];

setcookie('USER', json_encode($data), time() + 1000);

?>