<?php
session_start();
include_once "connection.php";
$city = $_POST['city'];
$areaname = $_POST['areaname'];

    $insertQuery = "INSERT INTO `areas`(`areaid`, `areaname`, `cityid`) VALUES (null,'$areaname','$city')";
    if (mysqli_query($con, $insertQuery)) {
        echo "<script>
            alert('One area Added.');
            window.location.href='addarea.php'
            </script>";
    } else {
        echo "Enter the values again.";
    }

?>
