<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "MeuBebeG12");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY iduser");

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    
    foreach ($row as $key => $value) {
        
        echo "<strong>" . $key . "</strong>" .": " . $value . "</br>";

    }
    echo "===================================== </br>";
}




