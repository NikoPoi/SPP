<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];


$query = "INSERT INTO spp (id_spp, tahun, nominal) VALUES ('$Data1', '$Data2', '$Data3')";
mysqli_query($kon, $query);

echo "<script>alert('Data Ditambah.');window.location='../spp.php';</script>";
?>