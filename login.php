<!DOCTYPE html>
<!DOCTYPE html>
<html>
<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
<style type="text/css">
table{
	margin-top: 0px;
	border: 2px solid;
	background-color: #eee;
}

td{
	border: 0px;
	padding: 10px;

}
th{
	border-bottom: 2px solid;
	background-color: #ddd;
}

</style>
</head>
<body>

<form action="welcome.php" method="post">
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">Login</h2></th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
</form>
</body>
</html>