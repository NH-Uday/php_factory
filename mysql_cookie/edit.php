<?php session_start();
//print_r($_SESSION);
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
?>
<form action="update.php" method="post"><pre>
User Name : 
<input type="text" value=<?php echo $_COOKIE["name"];?> name="uname"><br/>
ID : 
<input type="password" value=<?php echo $_COOKIE["id"];?> name="id" disabled="disabled"><br/>
password : 
<input type="text" value=<?php echo $_COOKIE["pass"];?> name="pass"><br/>
<input type="submit" name="sbt" value="submit" />
</pre>
</form>
<a href="home.php">Home</a><br/>
<?php 
}
else{
	header("Location:logout.php");
}
?>