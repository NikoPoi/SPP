<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Tambah Petugas | SPP</title>
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
                    <!-- <a class="btn btn-primary mt-3" href="petugas.php" role="button">Back</a> -->
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <label class="col-md-2 h6">ID Petugas</label>
                                        <input type="text" name="Data1" class="form-control col-md-4">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">Username</div>
                                        <input type="text" name="Data2" class="form-control col-md-4">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">Password</div>
                                        <input type="password" name="Data3" class="form-control col-md-4">
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <div class="row">
                                        <div class="col-md-2 h6">Nama Petugas</div>
                                        <input type="text" name="Data4" class="form-control col-md-4">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-4 h6" >Level</label>
                                <select name="Data5" class="form-control">
                                    <option value="No Selected" selected > Pilih Level</option>
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas </option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <input href="../petugas.php" type="submit" class="btn btn-primary">
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
