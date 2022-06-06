<?php
$con = mysqli_connect('127.0.0.1', 'root', null, 'yocars3');
//$con = mysqli_connect('127.0.0.1', 'root', null, 'student_cbrs');
if (!$con) {
    die('connection failed ' . mysqli_connect_error());
}
