<?php
session_start();
include_once "connection.php";

$company = $_POST['Brand'];
$carname = $_POST ['carname'];
$model = $_POST ['model'];
$color = $_POST ['color'];
$description = $_POST ['description'];
$condition = $_POST['condition'];
$insurance = $_POST['insurance'];
$rent = $_POST['rent'];
$regno = $_POST['regno'];
$rentalid = $_SESSION['rentalID'];

$temp_path = $_FILES['photo']['tmp_name'];
$photo_name = $_FILES['photo']['name'];
$file_path = 'uploads/' . $photo_name;
move_uploaded_file($temp_path, $file_path);

$temp_path2 = $_FILES['rcpic']['tmp_name'];
$photo_name2 = $_FILES['rcpic']['name'];
$file_path2 = 'uploads/' . $photo_name2;
move_uploaded_file($temp_path2, $photo_name2);

//$filesize = round($_FILES['rcpic']['size'] / 1024, 2);
//$ext = strtolower(pathinfo($org_path, PATHINFO_EXTENSION));
//if ($ext != "jpg" && $ext != "png") {
//    echo "please select jpg or png file only";
//} elseif ($filesize > 200) {
//    echo "Image Size must be Less than or equal to 200 KB";
//} else {
//    move_uploaded_file($temp_path, "uploads/$org_path");

$insertQuery = "INSERT INTO `rentalcars`(`company`,`car_name`,`model`,`color`,`description`,`photo`,`rc_pic`,`conditions`,`insurance_validity`,`rent`,`reg_no`,`rental_id`) VALUES
                                    ('$company','$carname','$model','$color','$description','$file_path','$file_path2','$condition','$insurance','$rent','$regno','$rentalid')";
//    echo $insertQuery;
if (mysqli_query($con, $insertQuery)) {
    header("location:rentaladdcar.php");
    echo "<script>
            alert('One Car Added.');
            window.location.href='rentaladdcar.php'
            </script>";
} else {
    echo "Enter the values again.";
}
//}
?>