<?php

$qualSuaIdade = 16;
$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualSuaIdade < $idadeCriança) {
    
    echo "Criança";

} elseif ($qualSuaIdade < $idadeMaior) {
    
    echo "Adolecente";

} else if ($qualSuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {
    echo "Idoso";
}
echo "<br>";

echo ($qualSuaIdade < $idadeMaior)? "Menor de idade" : "Maior de idade";

?>