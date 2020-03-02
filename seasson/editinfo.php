<?php session_start();
print_r($_SESSION);
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
?>
<form action="editinfo.php" method="post"><pre>
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

	for ($i = 0; $i < count($dar); $i++) {
    if($_SESSION["user"]==$dar[$i])
	{
		$userData[$i-2]=$_POST["fname"];
		$userData[$i-1]=$_POST["lname"];
		$userData[$i+1]=$_POST["phn"];
	}
	$file=fopen('userinfo.txt','w') or die("fle open error");
	$c=0;
	$cnt=1;
	foreach($dar as $w)
	{
		if($cnt%8==0)
		{
			$c=$c+fwrite($file,$w);
			$cnt++;
		}
		else
		{
			$c=$c+fwrite($file,$w);
			$c=$c+fwrite($file,"-");	
			$cnt++;
		}
	}
		}
	?>
User:
<input type="text" value=<?php echo $_SESSION["user"];?> name="user" disabled="disabled"><br/>
</form>

  First name:<br>
  <input type="text" name="firstname" value="<?php echo $dar["firstname"];?>">
  <br><br>
  Last name:<br>
  <input type="text" name="lastname" value="<?php echo $dar["lastname"];?>">
  <br><br>
  Phone Number:<br>
  <input type="text" name="phone" value="<?php echo $dar["phone"];?>">
  <br><br>
  <input type="submit" name="sbt" value="submit" />
  
  <a href="home1.php">Home</a><br/>
<?php 
}
else{
	header("Location:logout.php");
}
?>