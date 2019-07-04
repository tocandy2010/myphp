<?php

//https://pein0119.github.io/2015/02/03/%E6%B5%8F%E8%A7%88%E5%99%A8%E7%A6%81%E7%94%A8cookie%E5%90%8E%E5%A6%82%E4%BD%95%E4%BD%BF%E7%94%A8session/
///cookie 如果進用改走url
ini_set("session.use_cookies", 0);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1); 

session_start();

if (!empty($_REQUEST['firstname']) && !empty($_REQUEST['lastname'])) {
    $_SESSION['firstname'] = $_REQUEST['firstname'];
    $_SESSION['lastname'] = $_REQUEST['lastname'];
}
	
echo session_id() . "<br>";
var_dump($_SESSION); echo "<br>";
?>

<!DOCTYPE html>
<html>
<body>
<form action="">
First name:<br>
<input type="text" name="firstname" ><br>
Last name:<br>
<input type="text" name="lastname" ><br>
<input type="submit" value="Submit">
</form> 
</body>
</html>