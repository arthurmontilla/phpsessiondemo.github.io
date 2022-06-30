<?php

$uname="admin";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){

	echo "<h1>Welcome ".$_SESSION['uname']."</h1>";

	echo "<a href='product.php'>About</a><br>";

	echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){

	$_SESSION['uname']=$uname;

	echo "<script>location.href='welcome.php'</";
	}
	else{
		echo "<script>alert('username or password incorrect!')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<head>
</body>
</html>