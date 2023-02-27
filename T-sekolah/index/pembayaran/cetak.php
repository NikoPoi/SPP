<!DOCTYPE html>
<html lang="en">
    <head>
            <?php 
            include('../../components/header.php')
            ?>
        <title>Print Pembayaran | SPP</title>
        <style>
            @page{
                size: auto;
                margin: 0mm;
            }

            html{
                background-color: #fff;
                margin: 0px;
            }

            body {
                border: solid 1px black;
                marign: 10mm 15mm 10mm 15mm;
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">

                <!-- Page content-->
                <div class="container-fluid">
                        <h1>Data Pembayaran</h1>
                    <?php
                    include 'api/getData2.php';
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script>
            window.print();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="asset/js/scripts.js"></script>
    </body>
</html>
