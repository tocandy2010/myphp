<?php

$img = imagecreatefromjpeg("cat.jpeg");

$black = imagecolorallocate($img,0,0,0);


//imagettftext 字型必須使用絕對路徑
imagettftext($img,18,0,270,50,$black,"C:\Windows\Fonts\arial.ttf","hello word");

header("content-type:image/jpeg");

imagejpeg($img);
imagedestroy($img);


?>