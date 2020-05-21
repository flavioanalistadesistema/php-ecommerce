<?php

$dt = new DateTime();

$periodo =new DateInterval('P1Y2M3DT4H5M10S');

echo $dt->format('d/m/Y H:i:s'); // 21/05/2020 15:07:11

$dt->add($periodo);

echo '<br>';

echo $dt->format('d/m/Y H:i:s'); // 24/07/2021 19:12:21

?>
