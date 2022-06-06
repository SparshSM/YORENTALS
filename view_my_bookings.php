<?php
session_start();
include_once "connection.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <?php
    include_once "publicheader.php";
    ?>
</head>
<body>

<?php
$srno = 1;
$currentStatus = 0;
include_once "connection.php";

//$user_name = $_SESSION['user_username'];
//$rentals = "select * from booking where userame='$user_name'";
////echo $rentals;
//$result = mysqli_query($con, $rentals);
//while ($row = mysqli_fetch_array($result)) {

//    if ($row['book_status'] == 1) {
//        $currentStatus = 'Accepted';
//    }
//    if ($row['book_status'] == 2) {
//        $currentStatus = 'Rejected';
//    }
//}
?>

<?php
include_once "usernav.php";
?>

<div class="container" style="margin-top: 4rem">
    <div class="text-center">
        <h4 class="alert alert-info">My Bookings</h4>
    </div>

    <div class="row">
        <div class="col-md-12" style="border: 1px solid #000">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Sr No.</th>
                        <th>Booking Detail</th>
                        <th>Car Detail</th>
                    </tr>

                    <?php
                    $k = 1;
//                    $booking_id = $_GET['booking_id'];
                    $sql = "SELECT * FROM `booking` INNER JOIN cities ON cities.cityid=booking.city_id INNER JOIN areas
                    ON areas.areaid=booking.area_id INNER JOIN rentalcars ON rentalcars.id=booking.mycar_id WHERE
                    `username`='$username' ORDER BY booking.booking_id DESC";
                    $sql_result = mysqli_query($con, $sql);
                    while ($sql_row = mysqli_fetch_assoc($sql_result)) {
                        // while ($sql_row = mysqli_fetch_array($sql_result)) {
                        ?>
                        <tr>
                            <td class="text-danger" style="font-weight: bold"><?php echo $k++; ?></td>
                            <td>
                                <table class="table">
                                    <tr class="bg-warning">
                                        <th>Booking ID</th>
                                        <td><?php echo $sql_row['booking_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Driving License No.</th>
                                        <td><?php echo $sql_row['driving_license'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Aadhar No.</th>
                                        <td><?php echo $sql_row['aadhaar_number'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Start Date</th>
                                        <td><?php echo $sql_row['start_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <td><?php echo $sql_row['end_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Rent</th>
                                        <td>&#8377;<?php echo $sql_row['rent'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>City Name</th>
                                        <td><?php echo $sql_row['cityname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Area Name</th>
                                        <td><?php echo $sql_row['areaname'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Booking Status</th>
                                        <td>
                                            <?php
                                            if ($sql_row['book_status'] == 0) {
                                                ?>
                                                <button type="button" class="btn btn-danger">Cancel Booking</button>
                                                <?php
                                            }

                                            if ($sql_row['book_status'] == 1) {
                                                ?>
<!--                                                <a href="generate_bill.php" class="btn btn-success">Pay</a>-->
                                                <a href="generate_bill.php?booking_id=<?php echo $sql_row['booking_id']; ?>"
                                                class="btn btn-outline-success btn-sm">
                                                PAY</a>
                                                <?php
                                            }

                                            if ($sql_row['book_status'] == 2) {
                                               echo "<div class='text-danger font-weight-bold'>Booking Rejected</div>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td>
                                <table class="table">
                                    <tr class="bg-warning">
                                        <th>Car Name</th>
                                        <td><?php echo $sql_row['car_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td><?php echo $sql_row['model'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td><?php echo $sql_row['color'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td><?php echo $sql_row['conditions'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registration No.</th>
                                        <td><?php echo $sql_row['reg_no'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Insurance Validity</th>
                                        <td><?php echo $sql_row['insurance_validity'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td><img src="<?php echo $sql_row['photo'] ?>" width="50"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>