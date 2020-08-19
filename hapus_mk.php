<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$kode_matkul = $_GET["kode_matkul"];

if (hapus_mk($kode_matkul) > 0) {
	 echo "<script> alert('DATA BERHASIL DIHAPUS. . . ');
        document.location.href = 'matakuliah.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIHAPUS !!!');
        document.location.href = 'matakuliah.php';</script>";
    } 

?>