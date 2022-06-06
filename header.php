<?php
if (!isset($_SESSION['admin_username'])) {
    header("location:adminlogin.php");
    exit();
}
?>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
