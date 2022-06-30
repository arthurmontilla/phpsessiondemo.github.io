<?php
	session_start();

	if(isset($_SESSION['uname'])){

		echo "<h2>About Us</h2>";
		echo "<p1> My name is Arthur A. Montilla. I was born on August 31, 2000 at Calamba Laguna. I’m 21 years
			old. I live in Sirang lupa Calamba Laguna. My
			mother’s name is Elena Montilla and my father’s 
			name is Emerenciano Montilla.\r\n My favorite 
			sports are basketball, billiard and swimming. My 
			favorite food is caldereta and menudo. I also like
			to surf the internet.</p1>";
		echo "<p2> My name is Airish Reiden T. Quejada. I was born on January 06, 2001 at Calamba Laguna. I’m 21 years
			old. I live in Camp Vicente Lim Mayapa Calamba Laguna. My
			mother’s name is Ailene Quejada and my father’s 
			name is Ronaldo Quejada.\r\n My favorite food is 
			Kare-Kare and menudo. I also like to travel different 
			places</p2>";
		echo "<br><a href='welcome.php'><input type=button name=back value=back></a>";
	}
	else{
		
		echo "<script>location.href='login.php'</script>";

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