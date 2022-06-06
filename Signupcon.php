<?php

session_start();

$name = $_POST ['name'];
$mobileno = $_POST['mobno'];
$email = $_POST['email'];
$username = $_POST['Uname'];
$password = $_POST['pass'];
$confirm_pass = $_POST['confpass'];
include_once "connection.php";
$select = "select * from signup where username='$username'";
$userdata = mysqli_query($con, $select);
if (mysqli_num_rows($userdata) == 0) {
    $insertQuery = "INSERT INTO `signup`(`name`,`mobile`,`email`,`username`, `password`, `confirm_pass` ) VALUES
                                    ('$name','$mobileno','$email','$username','$password','$confirm_pass')";
    if (mysqli_query($con, $insertQuery)) {
//        header("location:index.php");
        echo "<script>
            alert('Signup Successful. You can login now!!');
            window.location.href='index.php'
            </script>";
    } else {
        echo "insert failed";
    }
} else {
    echo '<script>alert("username already exist");</script>';
}