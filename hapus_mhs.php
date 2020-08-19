<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nim = $_GET["nim"];

if (hapus_mhs($nim) > 0) {
	 echo "<script> alert('DATA BERHASIL DIHAPUS. . . ');
        document.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIHAPUS !!!');
        document.location.href = 'mahasiswa.php';</script>";
    } 

?>