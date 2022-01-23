<?php 

	include 'koneksi.php';

	$id = $_POST['id'];
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$query = "UPDATE karyawan SET id = '$id', nip = '$nip', nama = '$nama', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_hp = '$no_hp' WHERE id = $id ";

	$hasil = mysqli_query ($koneksi, $query);

	if ($hasil) {
		header('location: karyawan.php');
	} else {
		echo "Update Data Gagal";
	}

 ?>