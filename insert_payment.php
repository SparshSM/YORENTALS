<?php
include "connection.php";

$mycar_id = $_GET['mycar_id'];
$useremail = $_GET['useremail'];
$bookingid = $_REQUEST['bookingid'];

$startdate = date('Y-m-d', strtotime($_GET['startdate']));
$enddate = date('Y-m-d', strtotime($_GET['enddate']));
$numberofdays = $_GET['numberofdays'];

$gst_percent = 12;

$grandtotal = $_GET['grandtotal'] / 100;

$user = "select * from signup where username='$useremail'";
$user_result = mysqli_query($con, $user);
$user_row = mysqli_fetch_array($user_result);

date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d");

$insert = "insert into bills VALUES (NULL ,$numberofdays,12,$grandtotal,'$date','$bookingid')";
mysqli_query($con, $insert);

$update_status = "UPDATE `booking` SET payment_status='paid' WHERE booking_id=$bookingid";
mysqli_query($con, $update_status);

header("location:view_report.php");

