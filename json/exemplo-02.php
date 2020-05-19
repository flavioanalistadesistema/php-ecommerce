<?php

$json = '[{"nome":"Flavio","idade":42},{"nome":"Luciana","idade":42}]';

$data = json_decode($json, true);

var_dump($data);

?>