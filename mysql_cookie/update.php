<?php
$conn = mysqli_connect("localhost", "root", "","cred");
	$sql="UPDATE `admin` SET `name`='".$_REQUEST["uname"]."',`password`='".$_REQUEST["pass"]."' WHERE `id` ='".$_COOKIE["id"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	echo "Updated successfully"."<br>";
?>
<a href="logout.php">Login</a><br/>