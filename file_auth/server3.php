<?php
//echo $_POST["uname"]."<br/>";
//echo $_POST["pass"];
//print_r($GLOBALS);

$cred=array();
$file=fopen("cred.txt","r") or die("file error");
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	//echo strlen($ar[0]).",,".strlen($ar[1])."<br/>";
	$cred[$ar[0]]=trim($ar[1]);
}
print_r($cred);
$flag=0;
foreach($cred as $k=>$v){
	if($_REQUEST["uname"]==$k && md5($_REQUEST["pass"])==$v){
		echo "Login success";
		$flag=1;
		break;
	}
}
if($flag==0)
	echo "<p style='color:red'>Wrong credentials</p>";
/*if($_POST["uname"]=="raju" && $_POST["pass"]=="123"){
	echo "Login success";
}
else{
	echo "<p style='color:red'>Wrong credentials</p>";
}*/
echo "<br/>I am from PHP";
?>