<?php 


$filename = "images/download.jpg";
$base64 = base64_encode(file_get_contents($filename));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileInfo->file($filename);

$base64encode = "data:". $mimetype .";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para image</a>

<img src="<?=$base64encode?>">