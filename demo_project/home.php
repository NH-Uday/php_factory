<?php
session_start();
//print_r($GLOBALS);
$file=fopen("pictures/images.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	if($_SESSION["uname"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}
//echo $proPicURL;
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<img src="<?php echo $proPicURL;?>" width="50px" height="50px" /><br/><br/>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="edit.php">Edit Info</a><br/>
	<a href="picture.php">Change Photo</a><br/>
	<a href="show_all.php">Show All Users</a><br/>
	<a href="logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
<?php
}
else{
	header("Location:logout.php");
}
?>