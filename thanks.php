<?php
if(!isset($_REQUEST['msg'])) {
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>

    <?php
    include_once "publicheader.php";
    ?>
</head>
<body>

<?php
include_once "usernav.php";
?>

<div class="container text-center my-5 text-success jumbotron">
    <h1>
        <i class="far fa-3x fa-check-circle"></i>
    </h1>
    <h5>Car Booked Successfully.</h5> <br> <br>
    <a href="view_my_bookings.php"><button class="btn-warning" style="padding: 10px">Click here to check booking status</button></a>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>