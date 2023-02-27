<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($kon, "SELECT * FROM akun WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){

    session_start();
    $data = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $data['username'];
        header("Location: index/index.php");
    
} else {
    $_SESSION['login_gagal'] = "Username atau Password salah" ;
    header("Location: login.php");
}

?>