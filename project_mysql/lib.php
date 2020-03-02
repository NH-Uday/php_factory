<?php
function loadFromFile(){
	global $data;
	//loads the array with file data
	$myfile = fopen("cred.txt", "r") or die("Unable to open file!");
	while($line=fgets($myfile)) {
		$line=trim($line);
		$ar=explode("-",$line);
		if($_REQUEST["uname"]==$ar[0]){
			$temp["uname"]=$ar[0];
			$temp["pass"]=$ar[1];
			$temp["email"]=$ar[2];
			$data[]=$temp;
		}
	}
	fclose($myfile);
}
function loadFromMySQL(){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","cred");
	$sql="select * from user where uname='".$_REQUEST["uname"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["uname"]=$row["uname"];
		$temp["pass"]=$row["pass"];
		$temp["email"]=$row["email"];
		$data[]=$temp;
	}
}
?>