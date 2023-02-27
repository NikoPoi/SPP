<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Tambah Pembayaran | SPP</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <!-- Page content-->
                <div class="container-fluid">
                <form method="post" action="api/TambahData.php">
                    <div class="container">
                    <a class="btn btn-primary mt-3" href="pembayaran.php" role="button">Back</a>
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class=" h6">ID Pembayaran</label>
                                        <input type="text" name="Data1" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-2 col-6">
                                        <label class="col-md-4 h6" >ID Petugas</label>
                                    <select name="Data2" class="form-control">
                                    <option value="NO OPTION SELECT" selected>pilih petugas...</option>
                                            <?php
                                            include 'api/GetDP.php'
                                            ?>
                                    </select>
                                    </div>
                                    <div class="form-group mb-2 col-6">
                                        <label class="col-md-4 h6" >NISN</label>
                                    <select name="Data3" class="form-control">
                                    <option value="NO OPTION SELECT" selected>pilih NISN...</option>
                                            <?php
                                            include 'api/GetDP1.php'
                                            ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="row justify-content-around">
                                    <div class="form-group m-2 col ">
                                        <div class="row">
                                            <div class=" h6">Tanggal Bayar</div>
                                            <input type="text" name="Data4" class="form-control col-md-8">
                                        </div>
                                    </div>
                                    <div class="form-group m-2 col">
                                        <div class="row">
                                            <div class=" h6">Bulan Bayar</div>
                                            <input type="text" name="Data5" class="form-control col-md-8">
                                        </div>
                                    </div>
                                    <div class="form-group m-2 col">
                                        <div class="row">
                                            <div class=" h6">Tahun Bayar</div>
                                            <input type="text" name="Data6" class="form-control col-md-8">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class=" h6">Jumlah Bayar</div>
                                        <input type="number" name="Data8" class="form-control col-md-8">
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
