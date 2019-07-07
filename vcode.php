<html>
<head>
<meta charset="utf-8">

</head>
<script>
</script>
<style>

</style>
<body>


<?php


$str = "abcdefghijkmnpqrstuvwxyz23456789abcdefghijkmnpqrstuvwxyz23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
$vcode = substr(str_shuffle($str),0,4);


//if(!isset($_SESSION)){
	session_start();
//}

$_SESSION["vcode"] = $vcode;

$ima = imagecreatetruecolor(60,25);
$imb = imagecreatetruecolor(60,25);
$imbbig = imagecreatetruecolor(80,34);

$agray = imagecolorallocate($ima,200,200,200);
$bgray = imagecolorallocate($imb,200,200,200);
$blueword = imagecolorallocate($ima,0,0,255);

imagefill($ima,0,0,$agray);
imagefill($imb,0,0,$bgray);


imagestring($ima,5,10,4,$vcode,$blueword);

for($i = 0;$i<60;$i++){
	$offset = 3; //最大波動像素
	$round = 1; //波動週期
	$posy = round(sin($i * $round * 2 * M_PI / 60) * $offset);   //文字扭曲公式
	imagecopy($imb,$ima,$i,$posy,$i,0,1,25);
	
}



imagecopyresampled($imbbig,$imb,0,0,0,0,80,34,60,25);


ob_clean();
header("content-type:image/jpeg");
imagejpeg($imbbig);

imagedestroy($ima);
imagedestroy($imb);
imagedestroy($imbbig);

?>





</body>
</html>