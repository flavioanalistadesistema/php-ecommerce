<?php
require_once("exemplo-03.php");

$cpf = new Documento();
$cpf->setCpf("28023154800");

var_dump($cpf->exibir());

?>