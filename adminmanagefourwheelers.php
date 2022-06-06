<?php
include_once "connection.php";
$action = $_POST['action'];
switch ($action) {
    case 'delete':
        $brand = $_POST['Brand'];
        $deleteQuery = "delete from fourwheelers where Brand='$brand'";
        if (mysqli_query($con, $deleteQuery)) {
            header("location:adminviewfourwheelersbrand.php");
        } else {
            echo "<script>
            alert('Deletion Failed');
            window.location.href='adminviewfourwheelersbrand.php'
            </script>";
        }
        break;
    case 'update':
        $BrandID= ['BrandID'];
        $Brand = $_POST['Brand'];
        $insertQuery = "update `fourwheelers` set `Brand`='$Brand' where `BrandID`='$BrandID'";
        $result = mysqli_query($con, $insertQuery);
        if ($result) {
//            header("location:adminviewfourwheelersbrand.php");
            echo "<script>
            alert('Vehicle Details Updated Successfully.');
            window.location.href='adminviewfourwheelersbrand.php'
            </script>";
        } else {
            echo "insert failed";
        }
}



