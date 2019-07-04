<?php


$imgflow = imagecreatefromjpeg("./dog2.jpeg");

$imgf_w =imagesx($imgflow);$imgf_h =imagesy($imgflow);

/*
圖片縮放公式
先設定目標大小

在依照原圖寬高取得圖片是方形還是長型

寬型:目標寬 * 原圖高度\原圖寬

長型:反之

*/

$imgt_w = 300;$imgt_h=300;
if($imgf_w>$imgf_h){
    //$imgt_w= $imgf_w;
    $imgt_h = $imgt_w * $imgf_h / $imgf_w;
}else{
    //$imgt_h = $imgf_h;
    $imgt_w = $imgt_h * $imgf_w /$imgf_h;
}

$imgtarget = imagecreatetruecolor($imgt_w,$imgt_h);

imagecopyresampled ($imgtarget,$imgflow,0,0,0,0,$imgt_w,$imgt_h,$imgf_w,$imgf_h);

header("content-type:image/jpeg");
imagejpeg($imgtarget);

imagedestroy($imgtarget);
imagedestroy($imgflow);
