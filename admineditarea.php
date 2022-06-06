<?php
session_start();
include_once "connection.php";

$areaid = $deptrow = '';

if (isset($_GET['areaid'])) {
    $areaid = $_GET['areaid'];

    $selectarea = "select * from areas where areaid='$areaid'";
    $deptdata = mysqli_query($con, $selectarea);
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
    <title>Edit Areas</title>
    <?php
    include_once "header.php";
    ?>
    <?php
    include_once "adminsidebar.php";
    ?>
</head>
<body>
<div class="container">
    <h2>Edit Area details</h2>
    <form action="adminmanagearea.php" method="post" enctype="multipart/form-data">
        <input type="text" name="areaid" value="<?php echo $areaid; ?>" readonly class="form-control"
               placeholder="Enter areaid" id="areaid">
        <input type="text" name="areaname" value="<?php echo $deptrow['areaname']; ?>" class="form-control"
               placeholder="Enter area name" id="areaname">
        <input type="text" name="cityid" value="<?php echo $deptrow['cityid']; ?>" readonly class="form-control"
               placeholder="Enter city id" id="cityid">

        <input type="hidden" name="action" value="update">
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>
</body>
    </html><?php