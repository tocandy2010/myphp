<?php

include_once("./sql.php");

spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});

$myquery = new MyQuery($mysqli);

$var1 = $myquery->getField(52,MyQuery::QUERY_PRICE);

var_dump($var1);

?>