<?php
$file=fopen("data.txt","r") or die("file error");
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	echo $ar[0]." ".$ar[1]."<hr/>";
	echo "Phone: ".$ar[2].", email: ".$ar[3]."<br/><br/>";	
}
echo "<br/>I am from PHP";
?>