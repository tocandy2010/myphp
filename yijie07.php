<?php

$v1 = isset($_GET['v1']) && !empty($_GET['v1']) ? $_GET['v1'] : 0;
$v2 = isset($_GET['v2']) && !empty($_GET['v2']) ? $_GET['v2'] : 0;
if (isset($v1) && !empty($v2)) {
    $t = $v1 % $v2;
    $r1 = (int) ($v1 / $v2) . "......" . $t;
    $res = $r1;
} else {
    $res = 0;
}


?>


<form action='./yijie07.php' method='get'>
    <input type="text" name="v1" id="" value="<?php echo $v1;  ?>">
    /
    <input type="text" name="v2" id="" value="<?php echo $v2; ?>">
    <input type="submit" value='='>
    <?php



    echo "<span>{$res}</span>";

    ?>
</form>