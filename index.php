<!DOCTYPE html>

<?php
	session_start ();
	$username = "atikakiki";
	$password = "monstax";
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
			header("Location: sukses.php");
	}
	if(isset($_POST['username']) && isset($_POST['password'])){
	if($_POST['username'] == $username && $_POST ['password'] == $password)
	{
		$_SESSION['loggedin'] = true;
		header("Location:  sukses.php");
	}
	}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="login-box">
<img src="http://icons-for-free.com/free-icons/png/512/403023.png" class="avatar">
<h1>Login Here</h1>
<form method ="post" action="index.php">
<p>Username:</p>
<input type="text" name="username" placeholder="Enter Username"><br/>
<p>Password:</p>
<input type="password" name="password" placeholder="Enter Password"><br/>
<input type="submit" name="submit" value="Login">
<br>Belum Daftar?<a href="form.php">Daftar Disini</a>
</form>
</div>
</body>

</html>