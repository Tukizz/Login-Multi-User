<?php
session_start();

//cek Apakah USER sudah login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
}

//cek level admin
if ($_SESSION['level'] != "admin") {
	die("Anda Bukan Admin");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HALAMAN KHUSUS ADMIN</title>
</head>
<body>

<h1>SELAMAT DATANG<?php echo $_SESSION['userid']?> </h1>
<br>

<a href="log.php?op=out">Log Out</a>
	
</body>
</html>