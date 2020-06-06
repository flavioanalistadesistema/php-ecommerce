<?php

/**
 * Função Autoload 
 * Quando uma classe é estanciada o nome da classe vai para o parametro da function autoload 
 * Inclui o arquivo com nome do parametro
 *  
 * @param string $nomeClass
 * @return void
 */
function autoload($nomeClass)
{
    if (file_exists($nomeClass . '.php') === true) {

        require_once($nomeClass . '.php');
    }
}

spl_autoload_register('autoload');
spl_autoload_register(function ($nomeClass) {
    if (file_exists('abstract' . DIRECTORY_SEPARATOR . $nomeClass . '.php')) {
        require_once('abstract' . DIRECTORY_SEPARATOR . $nomeClass . '.php');
    }
});

$Civic = new Civic();
$Civic->revisao(358);
$Civic->acelerar(250);
