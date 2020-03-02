<?php
//print_r($_REQUEST);
//print_r($GLOBALS);
//echo "Hello: ".$_REQUEST["uname"];
//echo "<br/>";
if(strlen($_POST["pass"])==0){
	echo "<p style='color:red'>Must type password!</p>";
}

if($_POST["uname"]=="raju"){
	echo "Welcome<br/>";
}
//echo strpos($_REQUEST[]);
//foreach($_REQUEST as $v){
	//echo $v."<br/>";
//}
echo "<br/>I am from PHP";
?>