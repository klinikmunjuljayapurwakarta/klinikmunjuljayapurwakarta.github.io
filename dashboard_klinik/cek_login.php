<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "daftar";
$cek = mysql_connect($host, $user, $password);
$conn = mysql_select_db($database);
 
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $login = mysql_query ("select * from login where username = '$username' and password = '$password'");

    $cek = mysql_num_rows ($login);

    if ($cek > 0) {
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['status']="login";
        header ('location: index.php');
        header ('location:../dashboard_klinik/index.php');
    } else {
        echo "Login Gagal";
        header('location: login.php');     
    }
    

    







 ?>