<?php

$imagem = 'imagem';

if (!is_dir($imagem)) {
    
    mkdir($imagem, 777, true);
    echo "Aquivo $imagem criado com sucesso";
}else {
    rmdir($imagem);
    echo "Arquivo $imagem ja existe, deletado com sucesso";
}


?>