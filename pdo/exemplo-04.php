<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "MeuBebeG12");

$stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, despassword = :PASSWORD WHERE iduser = :ID");

$login = "menosmenos";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login, PDO::PARAM_STR);
$stmt->bindParam(":PASSWORD", $password, PDO::PARAM_STR);
$stmt->bindParam(":ID", $id, PDO::PARAM_STR);

$stmt->execute();

echo "Alterado com sucesso";