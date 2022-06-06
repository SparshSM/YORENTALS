<?php
@session_start();
include_once "connection.php";

if (isset($_POST['addarea'])) {
    $r_id = $_SESSION['rentalID'];
    $city = $_REQUEST['city'];
    $area = $_REQUEST['area'];

    $select = "SELECT * FROM `rentalareas` WHERE areaid='$area' AND cityid='$city'  AND rentalid='$r_id'";
    $exe = mysqli_query($con, $select);

    if (mysqli_num_rows($exe) > 0) {
        echo "exist";
    } else {
        // INSERT INTO `rentalareas`(`rental_areaid`, `areaid`, `cityid`, `rentalid`) VALUES ()
        $insert = "INSERT INTO `rentalareas`(`rental_areaid`, `areaid`, `cityid`, `rentalid`) VALUES (null,'$area','$city','$r_id')";
        $run = mysqli_query($con, $insert);

        if ($run) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
