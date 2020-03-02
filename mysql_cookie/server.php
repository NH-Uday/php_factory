<?php
global $data;
	$conn = mysqli_connect("localhost", "root", "","cred");
	$sql="select * from admin where name ='".$_REQUEST["uname"]."'";
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	while($row = mysqli_fetch_assoc($result)) {
		//echo $row["uname"];echo "<br/>";
		//print_r($row);
		$temp["name"]=$row["name"];
		$temp["id"]=$row["id"];
		$temp["password"]=$row["password"];
		$data[]=$temp;
	}
//print_r($cred);
$flag=0;
session_start();
if($_REQUEST["uname"]==$data[0]["name"] && $_REQUEST["pass"]==$data[0]["password"]){
/*  $_SESSION["valid"]="yes";
	$_SESSION["uname"]=$_REQUEST["uname"];*/
	setcookie("name", $_REQUEST["uname"],time()+50000);
	setcookie("id", $temp["id"],time()+50000);
	setcookie("pass", $_REQUEST["pass"],time()+50000);
	setcookie("valid","SET",time()+50000);		
	$flag=1;
}
if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
}
if($flag==1){
	header("Location:home.php");
}
/*if($_POST["uname"]=="raju" && $_POST["pass"]=="123"){
	echo "Login success";
}
else{
	echo "<p style='color:red'>Wrong credentials</p>";
}*/
?>