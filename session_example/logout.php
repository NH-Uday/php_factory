<?php
session_start();
$_SESSION["valid"]="";
unset($_SESSION["valid"]);
header("Location:login.php");
?>