<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>

Selamat Datang Users <?php echo $_SESSION['username']?>

<a href="logout.php">Logout</a>