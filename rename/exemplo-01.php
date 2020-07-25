<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!file_exists($dir1)) mkdir($dir1, 0777);
if (!file_exists($dir2)) mkdir($dir2, 0777);

$filename = "REDME.txt";
$fileRedme = $dir1 .DIRECTORY_SEPARATOR . $filename;

if (!file_exists($fileRedme)) {

    $file = fopen($fileRedme, 'w+');

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

if (file_exists($fileRedme)) {
    rename($fileRedme, $dir2 . DIRECTORY_SEPARATOR . $filename);
    echo 'Arquivo removido com sucesso!';
}   
