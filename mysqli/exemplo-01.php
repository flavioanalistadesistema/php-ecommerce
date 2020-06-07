<?php

$conn = new mysqli(
    "localhost", 
    "root",
    "MeuBebeG12",
    "dbphp7"
);

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("insert into tb_usuarios (`deslogin`, `despassword`) values(?, ?)");
$stmt->bind_param("ss", $login, $password);
$login= "flaaps";
$password= md5('123456');

$stmt->execute();

$login= "Dflugann";
$password= md5('Flavio');

$stmt->execute();

?>