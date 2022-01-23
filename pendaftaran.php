

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="images/logo2.png" rel="shortcut icon">
    <title>Pendaftaran Berobat</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/mycss.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <a href="index.html" class="fas fa-house-user form-submit form-group"></a>
                        <h2 class="form-title">Daftar Berobat</h2>
                        <form action="input.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama" required class="validate" />
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir"><i class="fas fa-calendar-alt"></i></label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin"><i class="fas fa-transgender"></i></label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="fas fa-map-marker-alt"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="no_hp"><i class="fas fa-phone-alt"></i></label>
                                <input type="text" name="no_hp" id="no_hp" placeholder="No HP" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="faskes_bpjs"><i class="fas fa-address-card"></i></label>
                                <input type="text" name="faskes_bpjs" id="faskes_bpjs" placeholder="Faskes BPJS" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="no_bpjs"><i class="fas fa-sort-numeric-up-alt"></i></label>
                                <input type="text" name="no_bpjs" id="no_bpjs" placeholder="No BPJS" required class="validate"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-sort-numeric-up-alt"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required class="validate"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" type="button"  name="signup" id="signup" class="form-submit" value="Daftar"></input>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>