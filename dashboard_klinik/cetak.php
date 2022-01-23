<?php 
    include 'koneksi.php';

    session_start();

    error_reporting(E_ALL ^ E_NOTICE);
    if ($_SESSION['status']=="login") {

    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = " . $id;
    $hasil = mysqli_query ($koneksi, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/my.css">
	<title>Cetak Kartu Berobat</title>
</head>
<body style="background-color: yellow;">
<div id="klinik">
	<div id="munjul">
    <link href="../images/logo2.png" rel="shortcut icon">
    
	<h2 border="1" align="center" class="text-gray-800" >KLINIK MUNJUL JAYA</h2>
	<p align="center" class="text-gray-800">Jl. Ipik Gandamanah No.206 Kel. Munjuljaya Kec. Purwakarta Kab. Purwakarta</p>

	<h1 class="h3 mb-2 text-gray-800" align="center">Kartu Berobat</h1>
	</div>
						<center>
                        <form method="POST" action="proses_cetak.php" class="text-gray-800" style="background-color: yellow;">

                        	<?php while ($data = mysqli_fetch_array($hasil)) { ?>

                              
                              <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="faskes_bpjs" class="col-sm-2 col-form-label">Faskes BPJS</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="faskes_bpjs" name="faskes_bpjs" value="<?php echo $data['faskes_bpjs'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="no_bpjs" class="col-sm-2 col-form-label">No BPJS</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" value="<?php echo $data['no_bpjs'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>">
                                </div>
                              </div>
                            <?php } ?>
                        </form>
                        <div id="munjul">
                        <h2 border="1" align="center" class="text-gray-800" >PERHATIAN :</h2>
						<p align="center" class="text-gray-800">* KARTU INI TIDAK BOLEH HILANG</p>
						<p align="center" class="text-gray-800">* SETIAP BEROBAT HARUS DIBAWA</p>
						</div>
            <script>
        window.print();
    </script>
                        	</center>
                        	</div>
                        	<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

        
</body>
</html>

<?php
} else {
    echo "Maaf Anda Belum Login";
    header('location: login.php');
}
?>
