<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
// $Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];



$query = "UPDATE spp SET tahun='$Data2', nominal='$Data3' WHERE id_spp = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../spp.php';</script>";

?>