<!DOCTYPE html>

<?php
session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) 
	{
		header("Location: index.php");
	}
	?>
<html>
<head>
<title>SELAMAT DATANG!</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h2>You Have Logged In!
<br/> WELCOME!!</h2>
<div class="date">
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "<br/>";
echo "Pukul : <b>". $jam." "."</b>";
$a = date ("H");
echo "<br/>";
if (($a>=6) && ($a<=11)){
echo "<b> Selamat Pagi !!</b>";
}
else if(($a>11) && ($a<=15))
{
echo " Selamat Siang !!";}
else if (($a>15) && ($a<=18)){
echo " Selamat Sore !!";}
else { echo ", <b> Selamat Malam </b>";}

?>
<br/>
</div>
<form action="logout.php">
        <button class="button" type="submit" name="out" value="Logout">
                Logout
        </button>
</form>
</div>
<body>
</html>