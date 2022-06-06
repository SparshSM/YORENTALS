<?php
session_start();
include_once "connection.php";

//print_r($_POST);
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $id = $_POST['id'];
    $status = '';
    switch ($action) {
        case 'reject':

            $status = 2;
            break;

        case 'accept':
            $status = 1;
            break;


    }
    $updaterentalstatus="UPDATE `rentalcars` SET `approve`='$status' WHERE  id='$id'";
    echo "<script>
            alert('Details Updated Successfully.');
            window.location.href='add4wheeler.php'
            </script>";
    mysqli_query($con,$updaterentalstatus);

}