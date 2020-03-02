<?php
$c=0;
if(strlen($_REQUEST["uname"])==0 || strlen($_REQUEST["id"])==0 || strlen($_REQUEST["pass"])==0){
	echo "All fields are mandatory!";
}
else{
    $conn = mysqli_connect("localhost", "root", "","cred");
	$sql="INSERT INTO admin(name, id, password) VALUES ('".$_REQUEST["uname"]."','".$_REQUEST["id"]."','".$_REQUEST["pass"]."')";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	/*while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["uname"]=$row["uname"];
		$temp["id"]=$row["pass"];
		$temp["pass"]=$row["email"];
		$data[]=$temp;
	}*/
}
echo "<br/>";
echo $c." charactes appended";
?>
<br/><a href="login.php">Login</a><br/>