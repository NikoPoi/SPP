<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];
$Data4 =$_POST['Data4'];
$Data5 =$_POST['Data5'];
$Data6 =$_POST['Data6'];
// $Data7 =$_POST['Data7'];
$Data8 =$_POST['Data8'];

$test = "SELECT * FROM siswa Where nisn ='$Data3'";

$result = mysqli_query($kon, $test);


$row = mysqli_fetch_array($result);
$id_spp = $row['id_spp'];

	// echo $id_spp ;

$query = "INSERT INTO pembayaran ( id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_bayar,tahun_dibayar,id_spp, jumblah_bayar) 
            VALUES ('$Data1', '$Data2', '$Data3', '$Data4','$Data5','$Data6','$id_spp','$Data8')";

mysqli_query($kon, $query);



echo "<script>alert('Data Ditambah.');window.location='../pembayaran.php';</script>";



?>