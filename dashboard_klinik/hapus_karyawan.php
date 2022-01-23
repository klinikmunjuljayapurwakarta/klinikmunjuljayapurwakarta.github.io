<?php 

	include 'koneksi.php';

	$id = $_GET['id'];

	$query = "DELETE from karyawan WHERE id = $id";

	$hasil = mysqli_query ($koneksi, $query);

	if ($hasil) {
		header('location: karyawan.php');
	} else {
		echo "Haspus Data Gagal";
	}

 ?>