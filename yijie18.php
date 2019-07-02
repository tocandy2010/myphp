<?php

function test1($x) : string{   // php7 後 可宣告function 返回類型
    return $x;
}

var_dump(test1(1));

?>