<?php
	// menghubungkan data ke database
	include '../koneksi/koneksi.php';

	$iduser = $_POST['IDuser'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$namalengkap = $_POST['namalengkap'];

	mysqli_query($koneksi, "INSERT into user(iduser,username,password,email,alamat,namalengkap)
		values('$IDuser','$username','$password','$email','$alamat','$namalengkap')");

	header('location: "../index.php')");
?>