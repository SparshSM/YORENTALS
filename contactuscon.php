<?php
session_start();
include_once "connection.php";
$username = $_POST ['name'];
$mobile = $_POST ['mobile'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$insertQuery = "INSERT INTO `contactus`(`name`,`mobile`,`email`,`message`) VALUES
                                    ('$username','$mobile','$email','$message')";
if (mysqli_query($con, $insertQuery)) {
//    header("location: contactus.php");
    echo "<script>
            alert('Thank you for contacting us. We will shortly contact you');
            window.location.href='contactus.php'
            </script>";
} else {
    echo "insert failed";
}
?>