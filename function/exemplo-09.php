<?php

function exibir($calback) {
    //Processo lento
    $calback();
}

exibir(function (){
    
    echo "Terminou";
});


?>