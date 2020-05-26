<?php
/**
 * Função Autoload 
 * Quando uma classe é estanciada o nome da classe vai para o parametro da function autoload 
 * Inclui o arquivo com nome do parametro
 *  
 * @param string $nomeClass
 * @return void
 */
function __autoload($nomeClass){

    require_once($nomeClass . '.php');
}

$Civic = new Civic();
$Civic->revisao(358);
$Civic->acelerar(250);

?>