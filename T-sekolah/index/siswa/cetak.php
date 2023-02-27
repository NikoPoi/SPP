<!DOCTYPE html>
<html lang="en">
    <head>
            <?php 
            include('../../components/header.php')
            ?>
        <title>SPP Sekolah Animek</title>
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
            <!-- Sidebar-->
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    <?php
                    include 'getData2.php';
                    ?>
                </div>
            </div>
        </div>
        <script>
		    window.print();
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="asset/js/scripts.js"></script>
    </body>
</html>
`
