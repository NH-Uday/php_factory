<?php
print_r($GLOBALS);
$errors=0;
$source=$_FILES['fileToUpload']['tmp_name'];
$target="uploads/".$_FILES['fileToUpload']['name'];
if(file_exists($target)){
	$errors=1;
	echo "File exists";
}
else{
	if(move_uploaded_file($source,$target)){
		echo "File uploaded:".$target;
	}
	$sql="update user set url='".$target."' where uname='".$_POST['uName']."'";
	echo $sql;
	$conn = mysqli_connect("localhost", "root", "","cred");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	if(mysqli_affected_rows($conn)){
		echo "File uploaded";
	}
}
?>