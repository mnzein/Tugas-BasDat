<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

if (isset($_POST["submit"])) {

	if (tambah_dsn($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DITAMBAHKAN. . . ');
        document.location.href = 'dosen.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DITAMBAHKAN !!!');
        document.location.href = 'dosen.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data </title>
	<style> label{
		display: block;
	} </style>
</head>
<body>
	<h2> Tambah Data Dosen </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nip_dosen"> NIP : </label>
				<input type="text" name="nip_dosen" id="nip_dosen" required>
			</li>
			<li>
				<label for="nama_dosen"> Nama Dosen : </label>
				<input type="text" name="nama_dosen" id="nama_dosen" required>
			</li>
			<li>
				<label for="email"> Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="alamat"> Alamat : </label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<br><button type="submit" name="submit"> TAMBAH </button></br>
		</ul>
	</form> 
</body>
</html>