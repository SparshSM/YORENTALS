<?php
session_start();
?>

<?php
include_once "connection.php";

$cityid = $deptrow = '';

if (isset($_GET['cityid'])) {
    $cityid = $_GET['cityid'];

    $selectcity = "select * from cities where cityid='$cityid'";
    $deptdata = mysqli_query($con, $selectcity);
    $deptrow = mysqli_fetch_array($deptdata);
}
?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Cities</title>
    <?php
    include_once "adminsidebar.php";
    ?>
</head>
<body>
<div class="container">
    <h2>Edit City details</h2>
    <form action="adminmanagecity.php" method="post" enctype="multipart/form-data">
        <input type="text" name="cityid" value="<?php echo $cityid; ?>" readonly class="form-control"
               placeholder="Enter cityid" id="cityid">
        <input type="text" name="cityname" value="<?php echo $deptrow['cityname']; ?>" class="form-control"
               placeholder="Enter Cityiname" id="cityname">
        <input type="text" name="postalcode" value="<?php echo $deptrow['postalcode']; ?>" class="form-control"
               placeholder="Enter postalcode" id="postalcode">

        <input type="hidden" name="action" value="update">
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>
</body>
    </html><?php