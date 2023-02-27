<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Lihat Siswa | SPP</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <!-- Page content-->
                <div class="container-fluid">
                    <?php
                    include 'getData.php';
                    ?>
                </div>
                <div class="col d-flex justify-content-end container">
                    <a class="btn btn-primary mt-3 px-4" href="cetak.php" role="button" target="_blank">Print</a>                    
                </div>
            </div>
        </div>
        <?php 
            include('../../components/footer.php')
            ?>
    </body>
</html>
