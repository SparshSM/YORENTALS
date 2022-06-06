<?php
session_start();
$id= $_POST['id'];

$updatequery = "update `rentals` set `approve` = '1' where `id` = $id ";

$result = mysqli_query($con, $updatequery);
if ($result) {
//            header("location:adminviewcity.php");
    echo "<script>
            alert('Rental Approved Successfully.');
            window.location.href='adminviewcity.php'
            </script>";
//    echo "One City Added.";
} else {
    echo "insert failed";
}