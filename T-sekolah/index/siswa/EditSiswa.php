<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';
// tenari
    // ['id'] == 0 ? $id : $id = ($_GET["id"]);

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM siswa as a LEFT JOIN kelas as b ON a.id_kelas = b.id_kelas LEFT JOIN spp as c ON a.id_spp = c.id_spp    WHERE nisn='$id'";
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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SPP Sekolah Animek</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../asset/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">SPP Sekolah ANIMEK</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../index.php">Dashboard</a>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kelas</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../kelas/kelas.php">Lihat Kelas</a></li>
                            <li><a class="dropdown-item" href="../kelas/TambahKelas.php">Tambah Kelas</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Pembayaran</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../pembayaran/pembayaran.php">Lihat Pembayaran</a></li>
                            <li><a class="dropdown-item" href="../pembayaran/TambahPembayaran.php">Tambah Pembayaran</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Petugas</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../petugas/petugas.php">Lihat Petugas</a></li>
                            <li><a class="dropdown-item" href="../petugas/TambahPetugas.php">Tambah Petugas</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Siswa</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./siswa.php">Lihat Siswa</a></li>
                            <li><a class="dropdown-item" href="./TambahSiswa.php">Tambah Siswa</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">SPP</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../spp/spp.php">Lihat SPP</a></li>
                            <li><a class="dropdown-item" href="../spp/TambahSpp.php">Tambah SPP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle"><</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">list</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <?php
                                        include'../aset-web/topbar.php';
                                    ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                <form method="post" action="EditData.php">
                    <div class="container">
                    <a class="btn btn-primary mt-3" href="siswa.php" role="button">Back</a>
                        <div class="card-body">
                        <h1>Edit Data <?php echo $data['nama']; ?></h1>
                            <div class="card-text m-2">
                            <input name="id" value="<?php echo $data['nisn']; ?>"  hidden />
                            <div class="row">
                                <div class="form-group m-2 col">
                                    <div class="row">
                                        <div class="col-md-2 h6">NIS</div>
                                        <input type="text" name="Data2" value="<?php echo $data['nis']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group m-2 col">
                                    <div class="row">
                                        <div class="col-md-2 h6">Nama</div>
                                        <input type="text" name="Data3" value="<?php echo $data['nama']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group m-2 col">
                                    <label class="h6" >Kelas</label>
                                <select name="Data4" class="form-control">
                                <option value="<?php echo $data['id_kelas']; ?>" selected><?php echo $data['nama_kelas']; ?> / <?php echo $data['kompetensi_keahlian']; ?></option>
                                        <?php
                                        include 'GetDP1.php'
                                        ?>
                                </select>
                                </div>
                            </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-2 h6">Alamat</div>
                                        <input type="text" name="Data5" value="<?php echo $data['alamat']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="row">
                                        <div class="col-md-2 h6">No Telepon</div>
                                        <input type="text" name="Data6" value="<?php echo $data['no_telp']; ?>" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >ID Spp</label>
                                <select name="Data7" class="form-control">
                                <option value="<?php echo $data['id_spp']; ?>" selected><?php echo $data['tahun']; ?> / Rp. <?php echo $HN ?> </option>
                                        <?php
                                        include 'GetDP.php'
                                        ?>
                                </select>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="asset/js/scripts.js"></script>
    </body>
</html>
