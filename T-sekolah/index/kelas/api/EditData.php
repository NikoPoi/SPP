<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id    =$_POST['id'];
// $Data1 =$_POST['Data1'];
$Data2 =$_POST['Data2'];
$Data3 =$_POST['Data3'];



$query = "UPDATE kelas SET nama_kelas='$Data2', kompetensi_keahlian='$Data3' WHERE id_kelas = '$id'";
mysqli_query($kon, $query);

echo "<script>alert('Data berhasil diubah.');window.location='../kelas.php';</script>";

?>