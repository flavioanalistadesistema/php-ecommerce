<?php

session_id('hte11surmq0o0d0c8f81n3sfsh');//Id da sessao recpera todoso os dados do usuario - mesmo na aba anonima

require_once("config.php");


session_regenerate_id();

echo session_id();

echo '<br>';

var_dump($_SESSION);

?>