<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$kode_matkul = $_GET["kode_matkul"];

$mk = query("SELECT * FROM matakuliah WHERE kode_matkul = $kode_matkul")[0];

if (isset($_POST["submit"])) {

	if (ubah_mk($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DIUBAH. . . ');
        document.location.href = 'matakuliah.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIUBAH !!!');
        document.location.href = 'matakuliah.php';</script>";
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
	<h2> Mengubah Data Matakuliah </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="kode_matkul"> Kode Matkul : </label>
				<input type="text" name="kode_matkul" id="kode_matkul" required
				value="<?= $mk["kode_matkul"]; ?>">
			</li>
			<li>
				<label for="nama_matkul"> Nama Matkul : </label>
				<input type="text" name="nama_matkul" id="nama_matkul" required
				value="<?= $mk["nama_matkul"]; ?>">
			</li>
			<li>
				<label for="sks"> SKS : </label>
				<input type="text" name="sks" id="sks" required
				value="<?= $mk["sks"]; ?>">
			</li>
			<li>
				<label for="semester"> Semester : </label>
				<input type="text" name="semester" id="semester" required
				value="<?= $mk["semester"]; ?>">
			</li>
			<li>
				<label for="nip_dosen"> NIP Dosen : </label>
				<input type="text" name="nip_dosen" id="nip_dosen" required
				value="<?= $mk["nip_dosen"]; ?>">
			</li>
			<br><button type="submit" name="submit"> UBAH </button></br>
		</ul>
	</form> 
</body>
</html>