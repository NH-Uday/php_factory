<h2>List of users</h2>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	
	global $data;
	$conn = mysqli_connect("localhost", "root", "","cred");
	$sql="select * from admin";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["name"]=$row["name"];
		$temp["id"]=$row["id"];
		$temp["password"]=$row["password"];
		$data[]=$temp;
		
		echo $temp["name"]."</br>";
		echo $temp["id"]."</br>";
		echo $temp["password"]."</br>";
		echo "</br>"."</br>";
	}
		
	
}
else{
	header("Location:logout.php");
}

?>
<a href="home.php">Home</a><br/><br/><br/>