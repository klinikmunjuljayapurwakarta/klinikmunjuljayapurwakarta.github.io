<?php 

// koneksi database
include 'koneksi.php';

// menangkap sebuah data yang dikirim dari form 
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$faskes_bpjs = $_POST['faskes_bpjs'];
$no_bpjs = $_POST['no_bpjs'];
$email = $_POST['email'];

// menginput ke database
mysqli_query ($koneksi, "insert into user value('$id','$nama','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp','$faskes_bpjs','$no_bpjs','$email')");

// mengalihkan halaman kembali ke user.php


header ("location: user.php");

 ?>