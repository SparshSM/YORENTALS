<?php
session_start();

$name = $_POST ['name'];
$mobileno = $_POST['mobno'];
$email = $_POST['email'];
$password = $_POST['pass'];
$aadhar = $_POST ['aadhar'];
$address = $_POST ['address'];

include_once "connection.php";
$select = "select * from rentals where email='$email' and password='$password'";
$userdata = mysqli_query($con, $select);
if (mysqli_num_rows($userdata) == 0) {
    $insertQuery = "INSERT INTO `rentals`(`name`,`mobile`,`email`, `password`,`aadharnumber`, `address` ) VALUES
                                    ('$name','$mobileno','$email','$password','$aadhar','$address')";
    if (mysqli_query($con, $insertQuery)) {
        echo "<script>
            alert('Signup Successful. Wait For Approval!!');
            window.location.href='index.php'
            </script>";
    } else {
        echo "insert failed";
    }
} else {
    echo '<script>alert("username already exist");</script>';
}
?>