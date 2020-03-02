<?php
//echo $_POST["uname"]."<br/>";
//echo $_POST["pass"];
print_r($GLOBALS);
$cred=array("raju"=>"2020","mina"=>"3030","mithu"=>"4040");
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