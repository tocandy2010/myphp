<?php
// GD庫;
/*
基本流程
1.產生畫布
2.顏色
3.繪畫
4.輸出
5.關閉
*/





$show = function($rate){
    $img = imagecreatetruecolor(400, 30);

    $yellow = imagecolorallocate($img, 255, 255, 0);
    $red = imagecolorallocate($img, 255, 0, 255);
    $black = imagecolorallocate($img, 0, 0, 0);
    imagefilledrectangle($img, 0, 0, 400, 30, $yellow);
    imagefilledrectangle($img, 0, 0, ($rate / 100) * 400, 300, $red);
    ImageTTFText($img, 16, 0, 180, 23, $black, "C:\Windows\Fonts\arial.ttf", "{$rate}%");

    header("content-type:image/png");
    ob_clean();
    imagepng($img);

    imagedestroy($img);
};



?>
