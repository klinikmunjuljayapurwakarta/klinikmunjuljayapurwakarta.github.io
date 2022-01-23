<?php 

	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$faskes_bpjs = $_POST['faskes_bpjs'];
	$no_bpjs = $_POST['no_bpjs'];
	$email = $_POST['email'];

	$query = "UPDATE user SET id = '$id', nama = '$nama', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_hp = '$no_hp', faskes_bpjs = '$faskes_bpjs', no_bpjs = '$no_bpjs', email = '$email' WHERE id = $id ";

	$hasil = mysqli_query ($koneksi, $query);

	if ($hasil) {
		header('location: user.php');
	} else {
		echo "Update Data Gagal";
	}

 ?>