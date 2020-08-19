<?php 
	require 'functions.php';
$matakuliah = query("SELECT * FROM matakuliah");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Matakuliah </title>
</head>
<body>
<hr>
	<h2> Daftar Matakuliah </h2>
<hr>
	<a href="tambah_mk.php"><button> Tambah Data </button></a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th> Kode Matkul </th>
		<th> Nama Matkul </th>
		<th> SKS </th>
		<th> Semester </th>
		<th> NIP Dosen </th>
		<th> Aksi </th>
	</tr>

	
    <?php
        foreach ($matakuliah as $mk) :
     ?>
	<tr>
		<td><?php echo $mk["kode_matkul"];?></td>
		<td><?php echo $mk["nama_matkul"];?></td>
		<td><?php echo $mk["sks"];?></td>
		<td><?php echo $mk["semester"];?></td>
		<td><?php echo $mk["nip_dosen"];?></th>
		<td><a href="ubah_mk.php?kode_matkul= <?php echo $mk["kode_matkul"];?>"> <button> Ubah </button></a> | 
			<a href="hapus_mk.php?kode_matkul= <?php echo $mk["kode_matkul"];?>" 
			   onclick="return confirm('Apakah Ingin Menghapus Data Ini?')"> <button> Hapus </button></a></td>
	</tr>
	<?php
     	endforeach;
     ?>
</table>
</body>
</html>

<div id="navigator">
<center>
	<h3>
	<hr> 
	| <a href="index.php"> Halaman Awal </a> |
	</hr>
	</h3>
</center>
</div>