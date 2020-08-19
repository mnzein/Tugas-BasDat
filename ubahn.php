<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nim = $_GET["nim"];

$n = query("SELECT * FROM nilai WHERE nim = $nim")[0];

if (isset($_POST["submit"])) {

	if (ubahn($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DIUBAH. . . ');
        document.location.href = 'nilai.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIUBAH !!!');
        document.location.href = 'nilai.php';</script>";
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
	<h2> Mengubah Data Nilai </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nim"> NIM : </label>
				<input type="text" name="nim" id="nim" required
				value="<?= $n["nim"]; ?>">
			</li>
			<li>
				<label for="nama_mhs"> Nama Mahasiswa : </label>
				<input type="text" name="nama_mhs" id="nama_mhs" required
				value="<?= $n["nama_mhs"]; ?>">
			</li>
			<li>
				<label for="kode_matkul"> Kode Matkul : </label>
				<input type="text" name="kode_matkul" id="kode_matkul" required
				value="<?= $n["kode_matkul"]; ?>">
			</li>
			<li>
				<label for="nama_matkul"> Nama Matkul: </label>
				<input type="text" name="nama_matkul" id="nama_matkul" required
				value="<?= $n["nama_matkul"]; ?>">
			</li>
			<li>
				<label for="sks"> SKS : </label>
				<input type="text" name="sks" id="sks" required
				value="<?= $n["sks"]; ?>">
			</li>
			<li>
				<label for="nilai"> Nilai : </label>
				<input type="text" name="nilai" id="nilai" required
				value="<?= $n["nilai"]; ?>">
			</li>
			<br><button type="submit" name="submit"> UBAH </button></br>
		</ul>
	</form> 
</body>
</html>