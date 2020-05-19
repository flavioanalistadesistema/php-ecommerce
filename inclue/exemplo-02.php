<?php
/**tenta funcionar mesmo se o arquivo não existir ou estiver com problema*/
//include"exemplo-01.php";

/**Obriga que o arquivo existe e funcione corretamente */
//require"exemplo-01.php";

/** Se houver mais de uma execução ele roda somente a primeira*/
require_once"exemplo-01.php";




$resultado = soma(10,20);
echo $resultado;
?>