<?php


function opd($path,$m= 1){
    $fp = opendir($path);
    while ($row = readdir($fp)) {
        if($row === '.' || $row === '..'){
            continue;
        }
        echo str_repeat("| - ",$m).$row . "<br/>";
        if(is_dir($path."\\".$row)){
            opd($path."\\".$row,$m+1);
        }
        
    }
}

$path = 'C:\yijie';

opd($path);

echo "<hr>";

date_default_timezone_set('Asia/Taipei');  //設定時區

$mydir = '.';
$fp = opendir($mydir) or exit("die");
while ($row = readdir($fp)) {
    $mtime = filemtime("{$mydir}/{$row}");
    $ntime = date('Y-m-d H:i:s',$mtime);
    echo "{$row} : {$ntime}<br/>";
}
