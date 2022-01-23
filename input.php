<?php 

	include 'koneksi.php';
	$nama = $_POST ['nama'];
	$tanggal_lahir = $_POST ['tanggal_lahir'];
	$jenis_kelamin = $_POST ['jenis_kelamin'];
	$alamat = $_POST ['alamat'];
	$no_hp = $_POST ['no_hp'];
	$faskes_bpjs = $_POST ['faskes_bpjs'];
	$no_bpjs = $_POST ['no_bpjs'];
	$email = $_POST ['email'];

	mysql_query ("INSERT INTO user values ('','$nama','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp','$faskes_bpjs','$no_bpjs','$email')");

	header ("location: index.html");

	if (mysql_affected_rows($koneksi)>0) {

		echo "<script>alert('Pendaftaran Berhasil!');

		</script>";

	}else {
		echo "<script>alert('Pendaftaran Gagal!');

		</script>"; 
	}



 ?>