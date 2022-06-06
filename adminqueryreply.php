<?php
include_once "connection.php";
$action = $_POST['action'];
switch ($action) {
    case 'delete':
        $name = $_POST['name'];
//        echo $cityid;

        $deleteQuery = "delete from contactus where name='$name'";
//        echo $deleteQuery;
        if (mysqli_query($con, $deleteQuery)) {
            header("location:adminviewqueries.php");
        } else {
            echo "deletion failed";
        }
        break;
    case 'answer':
        $answer = $_POST['answer'];

        $insertQuery = "INSERT INTO `contactusanswer`(`answer`) VALUES ('$answer')";
        $result = mysqli_query($con, $insertQuery);
        if ($result) {
            echo "<script>
            alert('Query Answered Successfully.');
            window.location.href='admindashboard.php'
            </script>";
        } else {
            echo "reply failed";
        }
}