<?php
//echo "<pre>";print_r($_SERVER);echo "</pre>";
print_r($_COOKIE);
if(isset($_COOKIE["name"]))
	echo "Hello: ".$_COOKIE["name"];
else
	echo "Unknown person";
?>