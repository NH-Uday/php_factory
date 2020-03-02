<?php
foreach($_COOKIE as $k=>$v){
	//echo $k."-".$v."<br/>";
	setcookie($k,"",time()-20);
}
//setcookie("pass","",time()-20);
//setcookie("name","",time()-20);
?>