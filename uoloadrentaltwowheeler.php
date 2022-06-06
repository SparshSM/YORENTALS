<?php
session_start();
include_once "connection.php";
$company = $_POST['Brand'];
$twowheelername = $_POST ['twowheelername'];
$model = $_POST ['model'];
$color = $_POST ['color'];
$description = $_POST ['description'];
$condition = $_POST['condition'];
$insurance = $_POST['insurance'];
$rent = $_POST['rent'];
$regno = $_POST['regno'];
$rentalid = $_SESSION['rentalID'];

$temp_path = $_FILES['photo']['tmp_name'];
$org_path = $_FILES['photo']['name'];
$file_path = 'uploads/' . $org_path;
move_uploaded_file($temp_path, $file_path);

$filesize = round($_FILES['photo']['size'] / 1024, 2);
$temp_path2 = $_FILES['rcpic']['tmp_name'];
$org_path = $_FILES['rcpic']['name'];
$file_path2 = 'uploads/' . $org_path;
move_uploaded_file($temp_path2, $org_path);

    $insertQuery = "INSERT INTO `rentaltwowheelers`(`company`,`model_name`,`model_year`,`color`,`description`,`photo`,`rc_pic`,`conditions`,`insurance_validity`,`rent`,`reg_no`,`rental_id`) VALUES
                                    ('$company','$twowheelername','$model','$color','$description','$file_path','$file_path2','$condition','$insurance','$rent','$regno','$rentalid')";
    if (mysqli_query($con, $insertQuery)) {
        echo "<script>
            alert('One Vehicle Added.');
            window.location.href='rentaladdtwowheeler.php'
            </script>";
    } else {
        echo "Enter the values again.";
}
?>