<?php

spl_autoload_register(function($nameClass){

    $className = str_replace('\\', DIRECTORY_SEPARATOR , $nameClass);
    $dirName = "Class";
    $filename = $dirName . DIRECTORY_SEPARATOR . $className . ".php";
    
    if (file_exists($filename)) {
        require_once $filename;
    }

});

?>