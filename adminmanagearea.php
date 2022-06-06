<?php
session_start();
include_once "connection.php";
$action = $_POST['action'];
switch ($action) {
    case 'update':
        $areaname = $_POST['areaname'];
        $areaid = $_POST['areaid'];


        $insertQuery = "update `areas` set `areaname`='$areaname' where `areaid`='$areaid'";
        $result = mysqli_query($con, $insertQuery);
        if ($result) {
            echo "<script>
            alert('Area Details Updated Successfully.');
            window.location.href='viewarea.php'
            </script>";
            echo "One City Added.";
        } else {
            echo "insert failed";
        }
}