<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $white);

imagepng($image);

imagedestroy($image);