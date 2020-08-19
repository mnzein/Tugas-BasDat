<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nip_dosen = $_GET["nip_dosen"];

$dsn = query("SELECT * FROM dosen WHERE nip_dosen = $nip_dosen")[0];

if (isset($_POST["submit"])) {

	if (ubah_dsn($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DIUBAH. . . ');
        document.location.href = 'dosen.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIUBAH !!!');
        document.location.href = 'dosen.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Mengubah Data </title>
	<style> label{
		display: block;
	} </style>
</head>
<body>
	<h2> Mengubah Data Dosen </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nip_dosen"> NIP : </label>
				<input type="text" name="nip_dosen" id="nip_dosen" required
				value="<?= $dsn["nip_dosen"]; ?>">
			</li>
			<li>
				<label for="nama_dosen"> Nama Dosen : </label>
				<input type="text" name="nama_dosen" id="nama_dosen" required
				value="<?= $dsn["nama_dosen"]; ?>">
			</li>
			<li>
				<label for="email"> Email : </label>
				<input type="text" name="email" id="email" required
				value="<?= $dsn["email"]; ?>">
			</li>
			<li>
				<label for="alamat"> Alamat : </label>
				<input type="text" name="alamat" id="alamat" required
				value="<?= $dsn["alamat"]; ?>">
			</li>
			<br><button type="submit" name="submit"> UBAH </button></br>
		</ul>
	</form> 
</body>
</html>