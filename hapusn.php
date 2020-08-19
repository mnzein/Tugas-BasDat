<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}  
	require 'functions.php';

$nim = $_GET["nim"];

if (hapusn($nim) > 0) {
	 echo "<script> alert('DATA BERHASIL DIHAPUS. . . ');
        document.location.href = 'nilai.php';</script>";
    } else {
        echo "<script> alert('DATA GAGAL DIHAPUS !!!');
        document.location.href = 'nilai.php';</script>";
    } 

?>