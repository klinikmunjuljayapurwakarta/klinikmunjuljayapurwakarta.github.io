<?php 

	include 'koneksi.php';

	$id = $_GET['id'];

	$query = "DELETE from user WHERE id = $id";

	$hasil = mysqli_query ($koneksi, $query);

	if ($hasil) {
		header('location: user.php');
	} else {
		echo "Haspus Data Gagal";
	}

 ?>