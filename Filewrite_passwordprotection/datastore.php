<table border="1px">
<tr>
<th>Name</th><th>Date of Birth</th><th>Gender</th><th>Phone</th><th>Email</th>
</tr>
<?php
	$file=fopen("userinfo.txt","r") or die("file error");
	$data=array();
	while($c=fgets($file)){
		$ar=explode("-",$c);
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