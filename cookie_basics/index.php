<?php
session_start();
//echo time();
setcookie("name","raju",time()+50000);
setcookie("pass","123",time()+5000);
//echo "I am trying to set a cookie";
//print_r($GLOBALS);
?>