<?php
include_once "connection.php";
$action = $_POST['action'];
switch ($action) {
    case 'update':
        $cityname = $_POST['cityname'];
        $cityid = $_POST['cityid'];
        $postalcode = $_POST['postalcode'];


        $insertQuery = "update `cities` set `cityname`='$cityname', `postalcode`='$postalcode' where `cityid`='$cityid'";


        $result = mysqli_query($con, $insertQuery);
        if ($result) {
            header("location:adminviewcity.php");
        } else {
            header("location:adminviewcity.php");
        }
        break;
}
