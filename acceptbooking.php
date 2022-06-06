<?php
session_start();
include_once "connection.php";

//print_r($_POST);
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $booking_id = $_POST['booking_id'];
    $status = '';
    switch ($action) {
        case 'reject':

            $status = 2;
            break;

        case 'accept':
            $status = 1;
            break;
    }
    $updaterentalstatus="UPDATE `booking` SET `book_status`='$status' WHERE  booking_id='$booking_id'";
    echo "<script>
            alert('Details Updated Successfully.');
            window.location.href='view_bookings.php'
            </script>";
    mysqli_query($con,$updaterentalstatus);
}