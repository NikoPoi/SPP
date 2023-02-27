<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Lihat Petugas | SPP</title>
        
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
                        <h1>Data Petugas </h1>
                        <div class="dropdown-divider"></div>
                    <?php
                    include 'api/getData.php';
                    ?>    
                </div>
                </div>
            </div>
        </div>
        <?php 
            include('../../components/footer.php')
            ?>
    </body>
</html>
