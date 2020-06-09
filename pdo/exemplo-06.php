<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "MeuBebeG12");
$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios WHERE iduser = ?");

$id = 4;

$stmt->execute(array($id));
echo "Executou ";

//$conn->rollBack();
$conn->commit();
echo "Deletado com sucesso";