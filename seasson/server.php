<?php
//echo $_POST["uname"]."<br/>";
//echo $_POST["pass"];
//print_r($GLOBALS);

$cred=array();
$file=fopen("userinfo.txt","r") or die("file error");
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	//echo strlen($ar[0]).",,".strlen($ar[1])."<br/>";
	$cred[$ar[7]]=trim($ar[8]);
}
//print_r($cred);
$flag=0;
session_start();
foreach($cred as $k=>$v){
	if($_REQUEST["mail"]==$k && md5($_REQUEST["pass"]) ==$v){
		echo "Login success";
		$_SESSION["valid"] = "yes";
		$_SESSION["user"]=$_REQUEST["mail"];
		$flag=1;
		break;
	}
}
if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
}
if($flag==1){
	header("Location:home1.php");
}

?>