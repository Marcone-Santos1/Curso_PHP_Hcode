<?php


$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5 , 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5 , 440, 350, "Marcone Magalhães", $titleColor);
imagestring($image, 3 , 450, 370, "Concluído em:".date("d/m/Y"), $titleColor);

header("Content-Type: image/jpg");
imagejpeg($image, "Certificado".date("d/m/Y").".jpg");

imagedestroy($image);