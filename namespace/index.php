<?php

require_once('config.php');

use Cliente\Cadastro;

$cadastroPessoa = new Cadastro();
$cadastroPessoa->setNome('Flavio');
$cadastroPessoa->setEmail('flavioanalistadesistema@gmail.com');
$cadastroPessoa->setSenha('123456');
$cadastroPessoa->registrarVenda();

?>