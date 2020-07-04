<?php

if (!is_dir("imagem")) mkdir("imagem");


foreach (scandir("imagem") as $item) {
    
    if (!in_array($item, array(".", ".."))) {
        unlink("imagem" . DIRECTORY_SEPARATOR . $item);
    }
}

?>