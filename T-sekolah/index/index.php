<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E - SPP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/assets/logo-spp.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="asset/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../asset/css/style.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light text-center"><a href="./index.php"><img src="../asset/images/logo-spp.png" alt="logo" width="79px" style="height: auto;"></a></div>
                <div class="list-group list-group-flush">
                <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>                     -->
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kelas</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="kelas/kelas.php">Lihat Kelas</a></li>
                            <li><a class="dropdown-item" href="kelas/TambahKelas.php">Tambah Kelas</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Pembayaran</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pembayaran/pembayaran.php">Lihat Pembayaran</a></li>
                            <li><a class="dropdown-item" href="pembayaran/TambahPembayaran.php">Tambah Pembayaran</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Petugas</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="petugas/petugas.php">Lihat Petugas</a></li>
                            <li><a class="dropdown-item" href="petugas/TambahPetugas.php">Tambah Petugas</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Siswa</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="siswa/siswa.php">Lihat Siswa</a></li>
                            <li><a class="dropdown-item" href="siswa/TambahSiswa.php">Tambah Siswa</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">SPP</a> 
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="spp/spp.php">Lihat SPP</a></li>
                            <li><a class="dropdown-item" href="spp/TambahSpp.php">Tambah SPP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-light" id="sidebarToggle">
                            <img src="./asset/img/navbar.png" alt="navbar" class="img-fluid" width="40px">
                        </button>
                        <a class="btn btn-danger" href=".././logout.php ">Logout</a>
                    </div>
                </nav>
                <!-- Page content-->
                <section class="main_header container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="display-4 fw-normal mb-4" style="margin-top: 100px;">Cara Baru Bayar Uang Pendidikan</div>
                        <p class="display-6">
                            Sistem Pembayaran Uang Sekolah Terkini
                        </p>
                        <p class="main_p_3 fw-normal">
                            Platform untuk Murid, Mahasiswa, dan Orang Tua untuk membayar keperluan sekolah dari aplikasi pembayaran favorit mereka.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="metode_pembayaran container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <span class="col fw-normal text-center display-4 mt-5 mb-5 text-dark">Metode Pembayaran</span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="https://www.infradigital.io/img/img_payment_options.svg" alt="">
                    </div> 
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="../asset/images/icon_method_cc.png" alt="credit"><div class="h5 fw-normal ">Credit/Debit</div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="../asset/images/icon_method_wallet.png" alt="wallet"><div class="h5 fw-normal ">e-Wallet</div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid w-25" src="../asset/images/icon_method_transfer.png" alt="transfer_bank"><div class="h5 fw-normal ">Transfer Bank</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefit container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="display-6 fw-normal">
                            Benefit Untuk Sekolah & Yayasan
                        </div>
                        <p class="mt-3">
                            Semua tagihan seperti SPP, Uang Buku, Sumbangan dan lain-lain, akan lebih mudah diinformasikan dan dibayarkan oleh orang tua siswa. IDN mendukung penuh gerakan paperless untuk semua sekolah.
                        </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img class="img-fluid w-75" src="https://www.infradigital.io/img/img_productknowledge_school_payment.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="fitur container">
            <div class="row justify-content-center">
                <span class="col fw-normal text-center display-4 mt-5 mb-5 text-dark">Fitur Platform</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Online <br> Reporting
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_report.svg" alt="">
                    <p>
                        Sekolah dan Yayasan memiliki reporting yang dapat di akses secara real-time dan terhubung dengan berbagai institusi pembayaran yang telah terintegrasi.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Settlement <br> dan Reconciliation
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_web.svg" alt="">
                    <p>
                        IDN dan para mitra channel pembayaran menjamin settlement dan rekonsiliasi yang jelas terhadap transaksi yang terjadi pada masing-masing pihak, dan siap memfasilitasi sekaligus melakukan investigasi jika terjadi perselisihan transaksi.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="h4 fw-normal mb-4">
                        Payment <br> Reminder
                    </div>
                    <img class="img-fluid mb-4 w-25" src="https://www.infradigital.io/img/icon_feature_school_finance.svg" alt="">
                    <p>
                        Pembayaran yang telah jatuh tempo akan diingatkan melalui channel sms ataupun email.
                    </p>
                </div>
            </div>
        </section>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="asset/js/scripts.js"></script>
    </body>
</html>
