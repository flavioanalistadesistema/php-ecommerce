<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$img = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename, 'w+');

fwrite($file, $img);

fclose($file);

?>

<img src="<?=$basename?>">;