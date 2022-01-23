<?php 

	$koneksi = mysqli_connect("localhost","root","","daftar");

	// cek koneksi
	if(mysqli_connect_errno()){
	echo "koneksi database gagal : " . mysql_connect_errno();
}

 ?>