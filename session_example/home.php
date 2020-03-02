<?php
session_start();
//print_r($GLOBALS);
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	echo "This is a place after login";
}
else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
?>
<br/>
<a href="logout.php">Log Out</a>