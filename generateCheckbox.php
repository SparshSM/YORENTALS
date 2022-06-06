<?php
include_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $seletQuery = "SELECT * FROM `areas` where cityid = '$id'";
    $run = mysqli_query($con, $seletQuery);

    while ($rows = mysqli_fetch_array($run)) {
//        echo "<div class='col-lg-5'><input type='checkbox' class='form-control' value='$rows[0]'>$rows[1]</div>";
        echo "<div class='col-lg-5'><div class='row'><div class='col-lg-2'><input type='checkbox' class='form-control' value='$rows[0]'></div><div class='col-lg-10'>$rows[1]</div></div></div>";
    }
}