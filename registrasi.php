<?php  
	require 'functions.php';

if(isset($_POST["register"])){
    
    if(registrasi($_POST) > 0){
            echo "<script> alert('ADMIN BARU BERHASIL DITAMBAHKAN . . . ') </script>";
    } else {
            echo mysqli_error($db);
   	}
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Registrasi Login </title>
	<style> label{
		display: block;
	} </style>
</head>
<body>
	<h2> Halaman Registrasi </h2>

	<form action="" method="POST">

    <ul>
        <li>
        	<label for="username"> Username : </label>
        	<input type="text" name="username" id="username" required>
        </li>
        <li>
            <label for="password"> Password : </label>
            <input type="password" name="password" id="password" required>
        </li>
        <li>
            <label for="password1"> Konfirmasi Password : </label>
            <input type="password" name="password1" id="password1" required>
        </li>
        <br><button type="submit" name="register"> Register </button>
        | <button><a href="login.php"> Kembali </a></button>
    </ul>
    </form>
</body>
</html>