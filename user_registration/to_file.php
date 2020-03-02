<?php
$file=fopen('myfile.txt','a') or die("fle open error");
$c=0;
if($_REQUEST["pass"]==$_REQUEST["confpass"]){
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["uname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
}

echo $c." charactes appended";
?>


