<?php
session_start();
if (!isset($_SESSION['user_username'])) {
    ?>
    <script>
        alert("Please Login");
        window.location.href ="index.php";
    </script>
    <?php
}

if (isset($_SESSION['user_username'])) {
    if (isset($_REQUEST['carid']) && isset($_REQUEST['cityid']) && isset($_REQUEST['areaid'])) {
        $carid = $_REQUEST['carid'];
        $cityid = $_REQUEST['cityid'];
        $areaid = $_REQUEST['areaid'];
    } else {
        header("Location: index.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YO Rentals</title>

    <?php
    include_once "publicheader.php";
    ?>

    <script src="js/script.js"></script>
</head>
<body>

<?php
//if (isset($_SESSION['user_username'])) {
//    include_once "usernav.php";
//} else {
include_once "usernav.php";
//}
?>

<div class="container py-5">
    <div class="text-center">
        <h2 class="text-info">Book Car</h2>
    </div>

    <form action="savebooking.php" method="post">
        <div class="row form-group">
            <?php
            include_once "connection.php";
            $username = $_SESSION['user_username'];

            $select = "SELECT * FROM `signup` WHERE username='$username'";
            $run = mysqli_query($con, $select);

            $row = mysqli_fetch_assoc($run);
            ?>
            <div class="col-lg-4">
                <label>Email</label>
                <input readonly value="<?php echo $row['email']; ?>" type="email" name="email" id="email"
                       class="form-control">
            </div>
            <div class="col-lg-4">
                <label>Name</label>
                <input readonly value="<?php echo $row['name']; ?>" type="text" name="name" id="name"
                       class="form-control">
            </div>
            <div class="col-lg-4">
                <label>Mobile Number</label>
                <input readonly value="<?php echo $row['mobile']; ?>" type="tel" name="mobile" id="mobile"
                       class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-4">
                <label>Car Name</label>
                <?php
                $select_car = "SELECT car_name FROM `rentalcars` WHERE id='$carid'";
                $res_car = mysqli_query($con, $select_car);
                $row_car = mysqli_fetch_assoc($res_car);
                ?>
                <input type="hidden" name="carid" value="<?php echo $carid; ?>">
                <input readonly value="<?php echo $row_car['car_name']; ?>" type="text" name="carname" id="carname"
                       class="form-control">
            </div>
            <div class="col-lg-4">
                <label>City Name</label>
                <?php
                $select_city = "SELECT * FROM `cities` WHERE cityid='$cityid'";
                $res_city = mysqli_query($con, $select_city);
                $row_city = mysqli_fetch_assoc($res_city);
                ?>
                <input type="hidden" name="cityid" value="<?php echo $cityid; ?>">
                <input readonly value="<?php echo $row_city['cityname']; ?>" type="text" name="cityname" id="cityname"
                       class="form-control">
            </div>
            <div class="col-lg-4">
                <label>Area Name</label>
                <?php
                $select_area = "SELECT * FROM `areas` WHERE areaid='$areaid'";
                $res_area = mysqli_query($con, $select_area);
                $row_area = mysqli_fetch_assoc($res_area);
                ?>
                <input type="hidden" name="areaid" value="<?php echo $areaid; ?>">
                <input readonly value="<?php echo $row_area['areaname']; ?>" type="text" name="areaname" id="areaname"
                       class="form-control">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-6">
                <label>Driving License Number</label>
                <input type="text" required name="drivinglicense" id="drivinglicense"
                       placeholder="Enter Driving License Number" class="form-control" minlength="15" maxlength="15">
            </div>
            <div class="col-lg-6">
                <label>Aadhaar Number</label>
                <input type="number" required name="aadhaar" id="aadhaar" placeholder="Enter Aadhaar Number" class="form-control" minlength="12" maxlength="12">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-6">
                <label>Start Date</label>
                <input type="date" required name="startdate" id="startdate" class="form-control">
            </div>
            <div class="col-lg-6">
                <label>End Date</label>
                <input type="date" required name="enddate" id="enddate" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-6 offset-lg-3">
                <button type="submit" name="savebooking" class="btn btn-primary btn-block">Book Now</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>