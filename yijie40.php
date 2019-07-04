<?php

session_start();

$_SESSION["var"] = 10;

echo $_SESSION['var'];


echo session_name();

echo session_id();

?>