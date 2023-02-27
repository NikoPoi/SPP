<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include('../../components/header.php')
        ?>
        <title>Tambah Kelas | SPP</title>
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
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <label class="col h6">ID Kelas</label>
                                        <input type="text" name="Data1" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col h6">Nama Kelas</div>
                                        <input type="text" name="Data2" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col h6">Kompetensi Keahlian</div>
                                        <input type="text" name="Data3" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <input href="kelas.php" type="submit" class="btn btn-primary">
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
