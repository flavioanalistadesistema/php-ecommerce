<?php

$resource = fopen('text.txt', 'a+');

fwrite($resource, date('Y-m-d H:i:s') . "\n");

fclose($resource);



?>