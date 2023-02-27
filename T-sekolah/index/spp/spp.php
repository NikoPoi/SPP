<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
            include('../../components/header.php')
            ?>
        <title>Lihat SPP | SPP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="asset/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../asset/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php 
            include('../../components/sidebar.php')
            ?>
            
                <div class="container-fluid">
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
