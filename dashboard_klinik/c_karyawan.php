<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form 
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];


// menginput ke database
mysqli_query ($koneksi, "insert into karyawan value('$id','$nip','$nama','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp')");

// mengalihkan halaman kembali ke user.php


header ("location: karyawan.php");

 ?>