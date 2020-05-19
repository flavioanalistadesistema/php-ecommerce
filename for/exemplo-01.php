<?php
$num = 100;

for ($i=0; $i < $num; $i+= 5) { 
    if ($i > 05 && $i < 30) continue;

    echo $i;
}

?>