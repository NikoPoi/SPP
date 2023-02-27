<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Lihat Pembayaran | SPP</title>

    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <!-- Page content-->
                <div class="container-fluid">
                    <div class="container">
                            <h1>Data Data Pembayaran</h1>
                        <?php
                        include 'api/getData.php';
                        ?>
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-primary mt-3 px-4" href="cetak.php" role="button" target="_blank">Print</a>                    
                </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include('../../components/footer.php')
            ?>
    </body>
</html>
