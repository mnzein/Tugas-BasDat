<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

if (isset($_POST["submit"])) {

	if (tambah_mhs($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DITAMBAHKAN. . . ');
        document.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DITAMBAHKAN !!!');
        document.location.href = 'mahasiswa.php';</script>";
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
	<h2> Tambah Data Mahasiswa </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nim"> NIM : </label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="nama_mhs"> Nama Mahsiswa : </label>
				<input type="text" name="nama_mhs" id="nama_mhs" required>
			</li>
			<li>
				<label for="jenis_kelamin"> Jenis Kelamin : </label>
				<select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>
                </select>
			</li>
			<li>
				<label for="jurusan"> Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="kelas"> Kelas : </label>
				<input type="text" name="kelas" id="kelas" required>
			</li>
			<br><button type="submit" name="submit"> TAMBAH </button></br>
		</ul>
	</form> 
</body>
</html>