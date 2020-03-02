<form action="server.php" method="post">
<h1>Your info to login</h1>
User Name :
<input value="" type="text" name="uname" /><br>
Password  : <input type="password" name="pass" /><br>
<br>
<input type="submit" name="sbt" value="Login" /><br>
</form>
<?php
session_start();
if(isset($_SESSION["msg"])){
	echo $_SESSION["msg"];
	unset($_SESSION["msg"]);
}
?>