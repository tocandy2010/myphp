<?php

// hash 加密 驗證

$pass = '1243';

$npass = password_hash($pass,PASSWORD_DEFAULT);

echo $npass."<br/>";

echo strlen($npass);

//hash字串比對 字串,比對hash
var_dump(password_verify($pass,$npass));





?>