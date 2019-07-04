<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $data = $_GET['data'];
        foreach($data as $k=>$v){
            $$k = $v;  //變數中的變數  用key的值 前方加上 $ 形成變數
        }
    ?>
    <h1><?php echo $title;  ?></h1>
    <hr>
    <span>HELLO,<?php echo $who; ?></span>
    <hr>
</body>
</html> 