<?php
require_once("exemplo-02.php");

$civic = new Carro();
$civic->setModelo("Civic");
$civic->setMotor('1.6');
$civic->setAno("2021");
$carro = $civic->exibir();

var_dump($carro);

?>