<?php
/**
 * function autoload()
 * Quando uma classe é estanciada o nome da classe vai para o parametro da function autoload 
 * Inclui o arquivo com nome do parametro
 *  
 * @param string $nomeClass
 * @return void
 */
function autoload($nomeClass){

    if (file_exists($nomeClass.".php") === true) {

        require_once($nomeClass . '.php');    

    }    
}

/**
 * spl_autoload_register()
 * Essa função chama a function com o nome passado pelo parametro
 * 
 * @param function autoload
 * @return void
 */
spl_autoload_register("autoload");//Parametro = nome da function

spl_autoload_register(function($nomeClass){
    if (file_exists('abstract'. DIRECTORY_SEPARATOR . $nomeClass.'.php') === true) {
        require_once('abstract'. DIRECTORY_SEPARATOR .$nomeClass.'.php');
    }
});

$cliente = new Cliente();
echo $cliente->nome("Flávio") . '<br>';
echo $cliente->acorda() . '<br>';
echo $cliente->trabalha();

?>