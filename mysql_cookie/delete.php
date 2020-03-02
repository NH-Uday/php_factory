<?php
$conn = mysqli_connect("localhost", "root", "","cred");
	$sql="DELETE FROM `admin` WHERE `id` ='".$_COOKIE["id"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	echo "Account deactivate"."<br>";
?>
<a href="logout.php">Login</a><br/>