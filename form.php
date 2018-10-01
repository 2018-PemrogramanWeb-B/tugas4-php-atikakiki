<!DOCTYPE HTML>  
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>  

<?php

$nama = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Pendaftaran</h2>
<div class="login-box">
<form method="post" action="daftar_berhasil.php">
  <p>Username: <input type="text" name="username">
  <br></p>
  <p>E-mail: <input type="text" name="email">
  <br></p>
  <p>Password: <input type="password" name="password">
  <br></p>
  <p>Konfirmasi Password: <input type="password" name="password">
  <br></p>
  <br>
  <input type="submit" name="submit" value="Sign Up">
</form>
</div>
</body>
</html>