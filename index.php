<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 
	require 'functions.php';
?>

<!DOCTYPE html>
<html>
<center>
<head>
	<title> Akademik </title>
</head>
<body>
	<hr>
		<h1><bold> Selamat Datang Dalam Situs Akademik </bold></h1>
	</hr>
</body>
</html>


<div id="navigator">
	<h2>
	<hr>
	<br>
	<br>
	<br> 
	| <a href="mahasiswa.php"> Mahasiswa </a> 
	| <a href="dosen.php"> Dosen </a>
	| <a href="matakuliah.php"> Matakuliah </a>
	| <a href="nilai.php"> Nilai </a>
	|
	<br> | <a href="logout.php"> Logout </a> | <br>
	</hr>
	</h2> 
</div>
</center>