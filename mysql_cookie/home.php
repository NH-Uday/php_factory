<?php
session_start();
//print_r($_SESSION);
print_r($_COOKIE);
?>
<br/><br/><br/>
<?php
if(isset($_COOKIE["name"])){
	echo "Hello ".$_COOKIE["name"];?>
	<br/><br/><br/><br/>
	<a href="edit.php">Edit Info</a><br/>
	<a href="show_all.php">Show All Users</a><br/>
	<a href="delete.php">Deactive</a><br/>
	<a href="logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
<?php	
/*if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="edit.php">Edit Info</a><br/>
	<a href="show_all.php">Show All Users</a><br/>
	<a href="logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
	*/

}
else{
	header("Location:logout.php");
}
?>