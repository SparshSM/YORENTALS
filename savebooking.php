<?php
@session_start();
include_once "connection.php";

if (isset($_REQUEST['savebooking'])) {
    $user = $_SESSION['user_username'];

    $area_id = $_REQUEST['areaid'];
    $city_id = $_REQUEST['cityid'];
    $mycar_id = $_REQUEST['carid'];

    $driving = $_REQUEST['drivinglicense'];
    $aadhaar = $_REQUEST['aadhaar'];
    $start = $_REQUEST['startdate'];
    $end = $_REQUEST['enddate'];

    $insert_booking = "INSERT INTO `booking` VALUES (null,'$user','$area_id','$city_id','$mycar_id','$driving','$aadhaar','$start','$end','pending','null')";
    $run = mysqli_query($con, $insert_booking);

    if ($run) {
        header("Location: thanks.php?msg=1");
    } else {
        echo "Booking Failed";
    }
}

