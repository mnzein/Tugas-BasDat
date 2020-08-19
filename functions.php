<?php

	$db=new mysqli("localhost:3308","root","","db_akademik");
	
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($mhs = mysqli_fetch_assoc($result)) {
        $rows[] = $mhs;
    }
    return $rows;
}


function tambah_mhs($data) {
	global $db;

	$nim = $data["nim"];
    $nama_mhs = $data["nama_mhs"];
   	$jenis_kelamin = $data["jenis_kelamin"];
    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];

    $query = "INSERT INTO mahasiswa VALUES
              	('$nim', '$nama_mhs', '$jenis_kelamin', '$jurusan', '$kelas')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
	

function hapus_mhs($nim) {
    global $db;

    mysqli_query($db, "DELETE FROM mahasiswa WHERE nim = $nim");

    return mysqli_affected_rows($db);
}


function ubah_mhs($data) {
	global $db;

	$nim = $data["nim"];
    $nama_mhs = $data["nama_mhs"];
   	$jenis_kelamin = $data["jenis_kelamin"];
    $jurusan = $data["jurusan"];
    $kelas = $data["kelas"];

    $query = "UPDATE mahasiswa SET
               	nim = '$nim', 
               	nama_mhs = '$nama_mhs', 
               	jenis_kelamin = '$jenis_kelamin', 
               	jurusan = '$jurusan', 
               	kelas = '$kelas'
              WHERE nim = $nim";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function tambah_dsn($data) {
    global $db;

    $nip_dosen = $data["nip_dosen"];
    $nama_dosen = $data["nama_dosen"];
    $email = $data["email"];
    $alamat = $data["alamat"];

    $query = "INSERT INTO dosen VALUES
                ('$nip_dosen', '$nama_dosen', '$email', '$alamat')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function hapus_dsn($nip_dosen) {
    global $db;

    mysqli_query($db, "DELETE FROM dosen WHERE nip_dosen = $nip_dosen");

    return mysqli_affected_rows($db);
}


function ubah_dsn($data) {
    global $db;

    $nip_dosen = $data["nip_dosen"];
    $nama_dosen = $data["nama_dosen"];
    $email = $data["email"];
    $alamat = $data["alamat"];

    $query = "UPDATE dosen SET
                nip_dosen = '$nip_dosen', 
                nama_dosen = '$nama_dosen', 
                email = '$email', 
                alamat = '$alamat' 
              WHERE nip_dosen = $nip_dosen";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function tambah_mk($data) {
    global $db;

    $kode_matkul = $data["kode_matkul"];
    $nama_matkul = $data["nama_matkul"];
    $sks = $data["sks"];
    $semester = $data["semester"];
    $nip_dosen = $data["nip_dosen"];

    $query = "INSERT INTO matakuliah VALUES
                ('$kode_matkul', '$nama_matkul', '$sks', '$semester', '$nip_dosen')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function hapus_mk($kode_matkul) {
    global $db;

    mysqli_query($db, "DELETE FROM matakuliah WHERE kode_matkul = $kode_matkul");

    return mysqli_affected_rows($db);
}


function ubah_mk($data) {
    global $db;

    $kode_matkul = $data["kode_matkul"];
    $nama_matkul = $data["nama_matkul"];
    $sks = $data["sks"];
    $semester = $data["semester"];
    $nip_dosen = $data["nip_dosen"];

    $query = "UPDATE matakuliah SET
                kode_matkul = '$kode_matkul', 
                nama_matkul = '$nama_matkul', 
                sks = '$sks',
                semester = '$semester', 
                nip_dosen = '$nip_dosen' 
              WHERE kode_matkul = $kode_matkul";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function tambahn($data) {
    global $db;

    $nim = $data["nim"];
    $nama_mhs = $data["nama_mhs"];
    $kode_matkul = $data["kode_matkul"];
    $nama_matkul = $data["nama_matkul"];
    $sks = $data["sks"];
    $nilai = $data["nilai"];

    $query = "INSERT INTO nilai VALUES
                ('$nim', '$nama_mhs', '$kode_matkul', '$nama_matkul', '$sks', '$nilai')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function hapusn($nim) {
    global $db;

    mysqli_query($db, "DELETE FROM nilai WHERE nim = $nim");

    return mysqli_affected_rows($db);
}


function ubahn($data) {
    global $db;

    $nim = $data["nim"];
    $nama_mhs = $data["nama_mhs"];
    $kode_matkul = $data["kode_matkul"];
    $nama_matkul = $data["nama_matkul"];
    $sks = $data["sks"];
    $nilai = $data["nilai"];

    $query = "UPDATE nilai SET
                nim = '$nim', 
                nama_mhs = '$nama_mhs', 
                kode_matkul = '$kode_matkul', 
                nama_matkul = '$nama_matkul',
                sks = '$sks', 
                nilai = '$nilai' 
              WHERE nim = $nim";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function registrasi($data){
    global $db;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password1 = mysqli_real_escape_string($db, $data["password1"]);
    
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert('USERNAME SUDAH TERDAFTAR !!!')</script>";
        return false;
    }

    if ($password !== $password1) {
    	echo "<script> alert('KONFIRMASI PASSWORD TIDAK SESUAI !!!')</script>";
    	return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($db, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($db);
}


?>