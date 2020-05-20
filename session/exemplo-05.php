<?php

require_once("config.php");

echo session_save_path();//localiza a pasta onde armazena a os dados da sessao

echo '<br>';

var_dump(session_status());

echo '<br>';

/** Mensagens de retorno conforme doxumentação PHP */
switch(session_status()){
    
    case PHP_SESSION_DISABLED;
        echo "sessões desabilitadas";
    break;

    case PHP_SESSION_NONE;
        echo "sessões habilitadas, mas nenhuma existir";
    break;

    case PHP_SESSION_ACTIVE;
        echo "sessões habilitadas, e uma existir.";
    break;
}


?>