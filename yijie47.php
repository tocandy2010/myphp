<?php

//自動加載
//類別名稱必須和檔名一致

spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});

$c1 = new cart();
$c1->addProduct('P001',100);
var_dump($c1->getAll());

?>