<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

if (isset($_POST["submit"])) {

	if (tambahn($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DITAMBAHKAN. . . ');
        document.location.href = 'nilai.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DITAMBAHKAN !!!');
        document.location.href = 'nilai.php';</script>";
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
	<h2> Tambah Data Nilai </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nim"> NIM : </label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="nama_mhs"> Nama Mahasiswa : </label>
				<input type="text" name="nama_mhs" id="nama_mhs" required>
			</li>
			<li>
				<label for="kode_matkul"> Kode Matkul : </label>
				<input type="text" name="kode_matkul" id="kode_matkul" required>
			</li>
			<li>
				<label for="nama_matkul"> Nama Matkul : </label>
				<input type="text" name="nama_matkul" id="nama_matkul" required>
			</li>
			<li>
				<label for="sks"> SKS : </label>
				<input type="text" name="sks" id="sks" required>
			</li>
			<li>
				<label for="nilai"> Nilai : </label>
				<input type="text" name="nilai" id="nilai" required>
			</li>
			<br><button type="submit" name="submit"> TAMBAH </button></br>
		</ul>
	</form> 
</body>
</html>