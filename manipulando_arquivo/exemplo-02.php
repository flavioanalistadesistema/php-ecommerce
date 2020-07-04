<?php

$imagem = scandir('imagem');

$data =[];
foreach ($imagem as $img) {
    if (!in_array($img, ['.','..'])) {
        $filename = "imagem" . DIRECTORY_SEPARATOR . $img;
        
        $info = pathinfo($filename);

        $info['size'] = filesize($filename);
        $info['date'] = date('Y-m-d H:i:s', filemtime($filename));
        $info['url']  = "http://dev-flaaps.com/manipulando_arquivo/". $filename;
        array_push($data, $info);
    }
}
var_dump($data);

?>