<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "MeuBebeG12");

$stmt = $conn->prepare("delete from tb_usuarios WHERE iduser = :ID");

$id = 3;

$stmt->bindParam(":ID", $id, PDO::PARAM_STR);

$stmt->execute();

echo "Deletado com sucesso";