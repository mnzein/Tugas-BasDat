<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nip_dosen = $_GET["nip_dosen"];

if (hapus_dsn($nip_dosen) > 0) {
	 echo "<script> alert('DATA BERHASIL DIHAPUS. . . ');
        document.location.href = 'dosen.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIHAPUS !!!');
        document.location.href = 'dosen.php';</script>";
    } 

?>