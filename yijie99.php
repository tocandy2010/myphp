<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php

define("ROWS", 2);
define("FROM", 2);
define("TO", 5);

?>

<body>
    <table border='1' width="100%">
        <?php for ($k = 0; $k < ROWS; $k++) {
            echo "<tr>";
            for ($i = FROM; $i <= TO; $i++) {
                $newi = $i + (TO - FROM + 1) * $k;  // 4為列數顯示數量
                $c = TO % 2 === 0?3:2;
                if(($k) %2 ===0){
                    $color = (($newi)%$c===0)?"pink":'yellow';
                }else{
                    $color = (($newi)%$c===0)?"yellow":'pink';
                }
                echo "<td style='background-color:" . $color . "'>";
                for ($j = 1; $j <= 9; $j++) {
                    echo "{$newi}X{$j}=" . $newi * $j . "<br/>";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>