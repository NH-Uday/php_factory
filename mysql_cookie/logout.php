<?php
session_start();
//unset($_SESSION["valid"]);
foreach($_COOKIE as $k=>$v){
	setcookie($k,"",time()-20);
}
header("Location:login.php");

?>