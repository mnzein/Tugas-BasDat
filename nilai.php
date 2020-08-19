<?php 
	require 'functions.php';
$nilai = query("SELECT * FROM nilai");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Nilai </title>
</head>
<body>
<hr>
	<h2> Daftar Nilai </h2>
<hr>
	<a href="tambahn.php"><button> Tambah Data </button></a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th> NIM </th>
		<th> Nama Mahasiswa </th>
		<th> Kode Matkul </th>
		<th> Nama Matkul </th>
		<th> SKS </th>
		<th> Nilai </th>
		<th> Aksi </th>
	</tr>

	
    <?php
        foreach ($nilai as $n) :
     ?>
	<tr>
		<td><?php echo $n["nim"];?></td>
		<td><?php echo $n["nama_mhs"];?></td>
		<td><?php echo $n["kode_matkul"];?></td>
		<td><?php echo $n["nama_matkul"];?></td>
		<td><?php echo $n["sks"];?></td>
		<td><?php echo $n["nilai"];?></th>
		<td><a href="ubahn.php?nim= <?php echo $n["nim"];?>"> <button> Ubah </button></a> | 
			<a href="hapusn.php?nim= <?php echo $n["nim"];?>" 
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