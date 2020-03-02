<?php
session_start();
$file=fopen("userinfo.txt","r") or die("file error");
$data=array();
while($c=fgets($file)){
		$ar=explode("-",$c);
		if($_SESSION["user"]==$ar[7]){
		$dar["firstname"]=$ar[0];
		$dar["lastname"]=$ar[1];
		$dar["Day"]=$ar[2];
		$dar["Month"]=$ar[3];
		$dar["Year"]=$ar[4];
		$dar["gender"]=$ar[5];
		$dar["phone"]=$ar[6];
		$dar["mail"]=$ar[7];
		$data[]=$dar;
		}
	}
	
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	echo "This is a place after login <br>";
	echo "welcome ".$dar["firstname"];
	echo "<br>";
}
else{
	$_SESSION["msg"]="Suspicious login attempt";
	header("Location:logout.php");
}
	?>
<table border="1px">
<tr>
<th>Name</th><th>Date of Birth</th><th>Gender</th><th>Phone</th><th>Email</th>
</tr>
<?php
	echo "<pre>";
	print_r($data);	
	echo "</pre>";
	
	foreach($data as $v){ ?>
	<tr>
	<td><?php echo $v["firstname"]." ".$v["lastname"]; ?></td>
	<td><?php echo $v["Day"]." ".$v["Month"]." ".$v["Year"]; ?></td>
	<td><?php echo $v["gender"]; ?></td>
	<td><?php echo $v["phone"]; ?></td>
	<td><?php echo $v["mail"]; ?></td>
	</tr>
<?php
	}
?>
</table>
<br/>
<a href="editinfo.php">Edit details</a>
</table>