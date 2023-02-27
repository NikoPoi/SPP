<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'api/koneksi.php';
// tenari
    // ['id'] == 0 ? $id : $id = ($_GET["id"]);

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM pembayaran as a LEFT JOIN siswa as b ON a.nisn = b.nisn LEFT JOIN spp as c ON a.id_spp = c.id_spp LEFT JOIN petugas as 
    d ON a.id_petugas = d.id_petugas  WHERE id_pembayaran ='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);

    $nominal =$data['nominal'] ;
    $HN = number_format($nominal);
    $jbl_bayar = $data['jumblah_bayar'];
    $JB = number_format($jbl_bayar);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Edit Pembayaran | SPP</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <!-- Page content-->
                <div class="container-fluid">
                <form method="post" action="api/EditData.php">
                    <div class="container">
                    <a class="btn btn-primary mt-3" href="pembayaran.php" role="button">Back</a>
                        <div class="card-body">
                        <h1>Edit Data Pembayaran <?php echo $data['nama']; ?></h1>
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['id_petugas']; ?>"  hidden />
                                <div class="form-group mb-3">
                                    <label class="h6" >ID Petugas</label>
                                <select name="Data1" class="form-control">
                                <option value="<?php echo $data['id_petugas'];?>" selected><?php echo $data['nama_petugas'];?> | <?php echo $data['level'];?></option>
                                        <?php
                                        include 'api/GetDP.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="h6" >NISN</label>
                                <select name="Data2" class="form-control">
                                <option value="<?php echo $data['nisn'];?>" selected><?php echo $data['nisn'];?> | <?php echo $data['nama'];?></option>
                                        <?php
                                        include 'api/GetDP1.php'
                                        ?>
                                </select>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col m-2">
                                        <div class="row">
                                            <div class="h6">Tanggal Bayar</div>
                                            <input type="text" name="Data3" value="<?php echo $data['tgl_bayar'];?>" class="form-control col-md-8">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col m-2">
                                        <div class="row">
                                            <div class="h6">Bulan Bayar</div>
                                            <input type="text" name="Data4" value="<?php echo $data['bulan_bayar'];?>" class="form-control col-md-8">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 col m-2">
                                        <div class="row">
                                            <div class="h6">Tahun Bayar</div>
                                            <input type="text" name="Data5" value="<?php echo $data['tahun_dibayar'];?>" class="form-control col-md-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="col-md-4 h6" >ID SPP</label>
                                <select name="Data6" class="form-control">
                                <option value="<?php echo $data['id_spp'];?>" selected><?php echo $data['tahun'];?> | Rp. <?php echo $HN ?></option>
                                        <?php
                                        include 'api/GetDP3.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="h6">Jumlah Pembayaran</div>
                                        <input type="number" name="Data7" value="<?php echo $data['jumblah_bayar'];?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <input href="" type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <?php 
            include('../../components/footer.php')
            ?>
    </body>
</html>
