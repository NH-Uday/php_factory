<?php
$file=fopen('userinfo.txt','a') or die("fle open error");
$c=0;
if($_REQUEST["pass"]==$_REQUEST["confpass"]){
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["firstname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["lastname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["Day"]."-".$_REQUEST["Month"]."-".$_REQUEST["Year"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["gender"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["phone"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["mail"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
}

echo $c." charactes appended";
?>
