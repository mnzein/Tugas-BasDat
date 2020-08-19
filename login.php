<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
} 
	require 'functions.php';

if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
        	$_SESSION["login"] = true;

        	header("Location: index.php");
            exit;
        }
     }
     $error = true;
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Akademik </title>
	<style> label{
		display: block;
	} </style>
</head>
<body>
	<h2> Halaman Login </h2>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username"> Username :</label>
           	 	<input type="text" name="username" id="username">


			</li>
			<li>
				<label for="password"> :Password :</label>
                <input type="password" name="password" id="password">
			</li>
			<br><button type="submit" name="login"> Login </button> 
			| <button><a href="registrasi.php"> Registrasi </a></button>
		</ul>
    </form>
     	<?php if (isset($error)) : ?>
           	  <p style="color: blue; font-style: bold;"> USERNAME ATAU PASSWORD SALAH </p>
        <?php endif; ?>
</body>
</html>