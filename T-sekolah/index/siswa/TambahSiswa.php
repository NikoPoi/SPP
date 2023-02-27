<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Tambah Siswa | SPP</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <!-- Page content-->
                <div class="container-fluid">
                <form method="post" action="PostData.php">
                    <div class="container">
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-md-2 h6">NISN</label>
                                        <input type="text" name="Data1" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">NIS</div>
                                        <input type="text" name="Data2" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">Nama</div>
                                        <input type="text" name="Data3" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="col-md-4 h6" >Kelas</label>
                                <select name="Data4" class="form-control">
                                <option value="NO OPTION SELECT" selected>pilih Kelas...</option>
                                        <?php
                                        include 'GetDP1.php'
                                        ?>
                                </select>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">Alamat</div>
                                        <input type="text" name="Data5" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">No Telepon</div>
                                        <input type="text" name="Data6" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >ID Spp</label>
                                <select name="Data7" class="form-control">
                                <option value="NO OPTION SELECT" selected>pilih Spp...</option>
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
        <?php 
            include('../../components/footer.php')
            ?>
    </body>
</html>
