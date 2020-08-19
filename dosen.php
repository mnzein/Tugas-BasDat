<?php 
	require 'functions.php';
$dosen = query("SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Dosen </title>
</head>
<body>
<hr>
	<h2> Daftar Dosen </h2>
<hr>
	<a href="tambah_dsn.php"><button> Tambah Data </button></a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th> NIP </th>
		<th> Nama Dosen </th>
		<th> Email </th>
		<th> Alamat </th>
		<th> Aksi </th>
	</tr>

	
    <?php
        foreach ($dosen as $dsn) :
     ?>
	<tr>
		<td><?php echo $dsn["nip_dosen"];?></td>
		<td><?php echo $dsn["nama_dosen"];?></td>
		<td><?php echo $dsn["email"];?></td>
		<td><?php echo $dsn["alamat"];?></td>
		<td><a href="ubah_dsn.php?nip_dosen= <?php echo $dsn["nip_dosen"];?>"> <button> Ubah </button></a> | 
			<a href="hapus_dsn.php?nip_dosen= <?php echo $dsn["nip_dosen"];?>" 
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