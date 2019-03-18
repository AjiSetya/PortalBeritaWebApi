<?php 
	// koneksi ke database
	
	$username_db   = "root";
	$password_db   = "";
	$hostname_db   = "localhost";
	$database_name = "db_fatihnews";

	// konek menggunakan 4 parameter 1.host, 2.usernamedb, 3.passworddb, 4.namadatabase
	$connection = new mysqli($hostname_db, $username_db, $password_db, $database_name);
	// var_dump($connection); menampilkan isi dari variable

	// cek error konek
	if ($connection->connect_error) {
		die('Gagal koneksi karena :' . $connection->connect_error);
	}
?>