<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nim = $_GET["nim"];

$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];

if (isset($_POST["submit"])) {

	if (ubah_mhs($_POST) > 0) {
        echo "<script> alert('DATA BERHASIL DIUBAH. . . ');
        document.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIUBAH !!!');
        document.location.href = 'mahasiswa.php';</script>";
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
	<h2> Mengubah Data Mahasiswa </h2>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="nim"> NIM : </label>
				<input type="text" name="nim" id="nim" required
				value="<?= $mhs["nim"]; ?>">
			</li>
			<li>
				<label for="nama_mhs"> Nama Mahsiswa : </label>
				<input type="text" name="nama_mhs" id="nama_mhs" required
				value="<?= $mhs["nama_mhs"]; ?>">
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
				<input type="text" name="jurusan" id="jurusan" required
				value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="kelas"> Kelas : </label>
				<input type="text" name="kelas" id="kelas" required
				value="<?= $mhs["kelas"]; ?>">
			</li>
			<br><button type="submit" name="submit"> UBAH </button></br>
		</ul>
	</form> 
</body>
</html>