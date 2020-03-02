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
		echo "<h1>".$data[0]["name"]."</h1><hr/>";
		echo "<h4>".$data[0]["id"]."</h4>";
		echo "<h4>".$data[0]["password"]."</h4>";
	}
}
else{
	header("Location:logout.php");
}
?>