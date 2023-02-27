<?php
  // Ini Koneksi
include 'api/koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kelas WHERE id_kelas='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
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
        <title>Edit Kelas | SPP</title>
        
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
                    <a class="btn btn-primary mt-3" href="kelas.php" role="button">Back</a>
                        <div class="card-body">
                        <h1>Edit kelas <?php echo $data['nama_kelas']; ?></h1>
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['id_kelas']; ?>"  hidden />
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="h6">Nama Kelas</div>
                                        <input type="text" name="Data2" value="<?php echo $data['nama_kelas']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="h6">Kompetensi Keahlian</div>
                                        <input type="text" name="Data3" value="<?php echo $data['kompetensi_keahlian']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <input href="siswa.php" type="submit" class="btn btn-primary">
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
