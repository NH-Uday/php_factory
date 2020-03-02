<table border="1px">
<tr>
<th>Name</th><th>Phone</th><th>Email</th>
</tr>
<?php
	$file=fopen("data.txt","r") or die("file error");
	$data=array();
	while($c=fgets($file)){
		$ar=explode("-",$c);
		$dar["fname"]=$ar[0];
		$dar["lname"]=$ar[1];
		$dar["phone"]=$ar[2];
		$dar["email"]=$ar[3];
		$data[]=$dar;
	}
	echo "<pre>";
	print_r($data);	
	echo "</pre>";
	
	foreach($data as $v){ ?>
	<tr>
	<td><?php echo $v["fname"]." ".$v["lname"]; ?></td>
	<td><?php echo $v["phone"]; ?></td>
	<td><?php echo $v["email"]; ?></td>
	</tr>
<?php
	}
echo "<br/>I am from PHP";
?>
</table>