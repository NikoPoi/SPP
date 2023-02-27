<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Lihat Kelas | SPP</title>
        
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
                        <h1>Data Kelas Sekolah Animek</h1>
                    <?php
                    include 'api/getData.php';
                    ?>    
                </div>
            </div>
        </div>
        <?php 
            include('../../components/footer.php')
        ?>
    </body>
</html>
