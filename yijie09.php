<?php
$v1 = isset($_GET['v1']) && !empty($_GET['v1']) ? $_GET['v1'] : 0;
$v2 = isset($_GET['v2']) && !empty($_GET['v2']) ? $_GET['v2'] : 0;
$m = isset($_GET['m']) && !empty($_GET['m']) ? $_GET['m'] : '0';

if($m === '0'){
    $res =$v1 + $v2;
}else if($m === '1'){
    $res =$v1 - $v2;
}else if($m === '2'){
    $res =$v1 * $v2;
}else if($m === '3'){
    $v3 = $v1 % $v2;
    $res = (int)($v1 / $v2).'......'.$v3;
}else{
     $res = "Bug";
} 



?>


<form action='./yijie09.php' method='get'>
    <input type="text" name="v1" id="" value="<?php echo $v1;  ?>">
    <select name="m" id="">
        <option <?php echo $m==='0'?'selected':''; ?> value="0">＋</option>
        <option <?php echo $m==='1'?'selected':''; ?> value="1">－</option>
        <option <?php echo $m==='2'?'selected':''; ?> value="2">X</option>
        <option <?php echo $m==='3'?'selected':''; ?> value="3">÷</option>
    </select>
    <input type="text" name="v2" id="" value="<?php echo $v2; ?>">
    <input type="submit" value='='>
    <?php



    echo "<span>{$res}</span>";

    ?>
</form>