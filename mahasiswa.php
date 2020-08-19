<?php 
	require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Mahasiswa </title>
</head>
<body>
<hr>
	<h2> Daftar Mahasiswa </h2>
<hr>
	<a href="tambah_mhs.php"><button> Tambah Data </button></a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th> NIM </th>
		<th> Nama Mahasiswa </th>
		<th> Jenis Kelamin </th>
		<th> Jurusan </th>
		<th> Kelas </th>
		<th> Aksi </th>
	</tr>

	
    <?php
        foreach ($mahasiswa as $mhs) :
     ?>
	<tr>
		<td><?php echo $mhs["nim"];?></td>
		<td><?php echo $mhs["nama_mhs"];?></td>
		<td><?php echo $mhs["jenis_kelamin"];?></td>
		<td><?php echo $mhs["jurusan"];?></td>
		<td><?php echo $mhs["kelas"];?></th>
		<td><a href="ubah_mhs.php?nim= <?php echo $mhs["nim"];?>"> <button> Ubah </button></a> | 
			<a href="hapus_mhs.php?nim= <?php echo $mhs["nim"];?>" 
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