<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Halaman Login</title>
    <!-- <style>
        body {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,90,121,1) 0%, rgba(0,212,255,1) 100%);
        }
    </style> -->
</head>
<body>
    <form action="prosses_login.php" method="POST">
        <div class="container" style="height: 500px">
            <div class="row h-100">
                <div class="col-sm-12" style="margin-top: 22vh;">
                    <div class="card shadow-lg w-50 mx-auto">
                        <div class="card-header">
                            <div class="text-black display-4 row mt-2 row justify-content-center fw-normal">LOGIN</div>
                        </div>
                        <div class="card-body">
                            <div class="card-text m-2">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-4 h6">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-4 h6">Password </div>
                                        <input type="password" name="password" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=""> </div>
                                        <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col text-center">
                                        <?php
                                        if (isset($_SESSION['login_gagal'])) {
                                            echo '<div class="alert alert-warning text-center" role="alert">';
                                            echo $_SESSION['login_gagal'];
                                            echo '</div> ';
                                            session_unset();
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>