<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "MeuBebeG12");

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, despassword) values(:LOGIN, :PASSWORD)");

$login = "maismais";
$password = "123456";

$stmt->bindParam(":LOGIN", $login, PDO::PARAM_STR);
$stmt->bindParam(":PASSWORD", $password, PDO::PARAM_STR);

$stmt->execute();

echo "Salvo com sucesso";