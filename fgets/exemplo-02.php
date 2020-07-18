<?php

$filename = 'html.png';

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$minetype = $fileinfo->file($filename);

$base64Enconde = "data:$minetype;base64," . $base64;
?>

<a href="http://<?=$base64Enconde?>" target="_blank">Link para imagem</a>
<img src="<?=$base64Enconde?>">;
