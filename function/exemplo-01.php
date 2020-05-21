<?php

function ola()
{
    return "Hello word!!!";// Impotante utilizar o RETURN, para que A função seja ABSTRATA e reutilizadas em outras ocasiões
}

echo ola();
echo "<br>";

$frase = ola();
echo strlen($frase);
