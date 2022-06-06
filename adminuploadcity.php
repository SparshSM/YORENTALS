<?php
session_start();
include_once "connection.php";
$cityname = $_POST ['cityname'];
$cityname = urlencode($cityname);
$postalcode = $_POST ['postalcode'];

$insertQuery = "INSERT INTO `cities`(`cityid`,`cityname`,`postalcode`) VALUES(null,'$cityname','$postalcode')";
if (mysqli_query($con, $insertQuery)) {
    echo "<script>
            alert('City Added Successfully.');
            window.location.href='adminaddcity.php'
            </script>";
} else {
    echo "Error.";
}

?>