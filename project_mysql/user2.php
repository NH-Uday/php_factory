<h2>User Info</h2>
<a href="home.php">Home</a><br/><br/><br/>
<?php
$data=array();
include("lib.php");
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["uname"])){
		//loadFromFile();
		loadFromMySQL();
		//print_r($data);
		echo "<h1>".$data[0]["uname"]."</h1><hr/>";
		echo "<h4>Email:".$data[0]["email"]."</h4>";
		echo "<h4>Pass:".$data[0]["pass"]."</h4>";
	}
}
else{
	header("Location:logout.php");
}
?>