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
    $updaterentalstatus="UPDATE `booking` SET `book_status`='$status' WHERE  id='$id'";
    echo "<script>
            alert('Details Updated Successfully.');
            window.location.href='view_my_bookings.php'
            </script>";
    mysqli_query($con,$updaterentalstatus);

}