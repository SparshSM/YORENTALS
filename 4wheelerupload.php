<?php
session_start();
include_once "connection.php";
$Brand = $_POST ['Brand'];
    $insertQuery = "INSERT INTO `fourwheelers`(`Brand`) VALUES
                                    ('$Brand')";
    if (mysqli_query($con, $insertQuery)) {
        echo "<script>
            alert('One Brand Added.');
            window.location.href='addfourwheelersbrand.php'
            </script>";
    } else {
        echo "<script>
            alert('Brand Already Exists!.');
            window.location.href='addfourwheelersbrand.php'
            </script>";
    }
?>