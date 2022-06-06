<?php
include_once "connection.php";
$cityid = $row['cityid'];
$deleteQuery = "delete from rentalareas where cityid='$cityid'";
if (mysqli_query($con, $deleteQuery)) {
    header("location:add_my_area.php");
} else {
    echo "<script>
           alert('Deletion Failed');
           window.location.href='add_my_area.php'
           </script>";
}
