<?php

require_once("config.php");

session_unset($_SEESION['nome']);//apaga variaevis de sessões

echo $_SESSION["nome"]; 

session_destroy();// destroi usuario da sessao

?>