<?php
require_once('config.php');

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY iduser");

$header = [];

foreach ($usuarios[0] as $key => $value) {
    
    array_push($header, $key);

}

$fp = fopen('arquivo.csv', 'w+');

fwrite($fp, implode(',', $header) . "\n");

foreach ($usuarios as $row) {

        $data = [];
        
        foreach ($row as $key => $value) {

            array_push($data, $value);
        }
    
    fwrite($fp, implode(',', $data) . "\n");
}


fclose($fp);

?>