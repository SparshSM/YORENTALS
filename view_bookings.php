<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style>
        div a:hover {
            color: #a71d2a;
        }
    </style>
</head>
<body>

<?php
include_once "rentalheader.php";
include_once "rentalsidebar.php";
?>

<h1 class="text-center">Customer Bookings</h1>
<hr>

<?php
include_once "connection.php";

$srno = 1;
$rentalbill = "select * from booking";
$resultbill = mysqli_query($con, $rentalbill);
while ($row = mysqli_fetch_array($resultbill)) {
    $currentStatus = 'Pending';
    if ($row[10] == 1) {
        $currentStatus = 'Accepted';
    }
    if ($row[10] == 2) {
        $currentStatus = 'Rejected';
    }
}
$fetch_booking = "SELECT booking.*,signup.name,signup.mobile,rentalcars.rent FROM `booking`INNER JOIN signup ON booking.username=signup.username INNER JOIN rentalcars ON booking.mycar_id=rentalcars.id WHERE booking.payment_status='pending' ORDER BY booking_id DESC";
//$fetch_booking = "SELECT booking.*,signup.name,signup.mobile,rentalcars.rent FROM `booking`INNER JOIN signup ON booking.username=signup.username INNER JOIN rentalcars ON booking.mycar_id=rentalcars.id";
$run = mysqli_query($con, $fetch_booking);

if (mysqli_num_rows($run) > 0) {
    ?>
    <div class="table-responsive mt-5">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info text-white">
                <th>Booking ID</th>
                <th>Customer Name</th>
                <th>Mobile</th>
                <th>Pickup Area</th>
                <th>City</th>
                <th>Car</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
                ?>
                <tr>
                    <td><?php echo $row['booking_id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td>
                        <?php
                        $Areaid = $row['area_id'];

                        $select_Areas = "select * from areas WHERE areaid=$Areaid";
                        $result_Areas = mysqli_query($con, $select_Areas);
                        $row_Areasname = mysqli_fetch_assoc($result_Areas);
                        echo $row_Areasname['areaname'];
                        ?>
                    </td>

                    <td>
                        <?php
                        $Cityid = $row['city_id'];
                        $select_City = "select * from cities WHERE cityid=$Cityid";
                        $result_City = mysqli_query($con, $select_City);
                        $row_City = mysqli_fetch_assoc($result_City);
                        echo $row_City['cityname'];
                        ?>
                    </td>

                    <td>
                        <?php
                        $Carid = $row['mycar_id'];

                        $select_Car = "select * from rentalcars WHERE id=$Carid";
                        $result_Car = mysqli_query($con, $select_Car);
                        $row_Car = mysqli_fetch_assoc($result_Car);
                        echo $row_Car['car_name'];
                        ?>
                    </td>
                    <td><?php echo $row['start_date'] ?></td>
                    <td><?php echo $row['end_date'] ?></td>

                    <td>
                        <?php
                        if ($currentStatus == "Pending") {
                            ?>
                            <form onsubmit="return confirm('Are you Sure to Accept the Request ?')"
                                  action="acceptbooking.php"
                                  method="post">
                                <input type="hidden" name="action" value="accept">
                                <input type="hidden" name="booking_id" value="<?php echo $row['booking_id']; ?>"
                                       id="booking_id">
                                <button type="submit" name="accept" class="btn btn-success">
                                    <i class='fas fa-thumbs-up'></i> Accept
                                </button>

                            </form>
                            <form onsubmit="return confirm('Are you Sure to Reject the Request ?')"
                                  action="acceptbooking.php"
                                  method="post">
                                <input type="hidden" name="action" value="reject">
                                <input type="hidden" name="booking_id" value="<?php echo $row['booking_id']; ?>"
                                       id="booking_id">
                                <button type="submit" name="rejected" class="btn btn-danger">
                                    <i class='fas fa-trash-alt'></i> Reject
                                </button>

                            </form>
                            <?php
                        } else if ($currentStatus == "Accepted") {
                            ?>
                            <form onsubmit="return confirm('Are you Sure to Reject the Request ?')"
                                  action="acceptbooking.php"
                                  method="post">
                                <input type="hidden" name="action" value="reject">
                                <input type="hidden" name="booking_id" value="<?php echo $row['booking_id']; ?>"
                                       id="booking_id">
                                <button type="submit" name="rejected" class="btn btn-danger">
                                    <i class='fas fa-trash-alt'></i> Reject
                                </button>

                            </form>
                            <?php

                        } else if ($currentStatus == "Rejected") {
                            ?>
                            <form
                                    action="acceptbooking.php"
                                    method="post">
                                <input type="hidden" name="action" value="accept">
                                <input type="hidden" name="booking_id" value="<?php echo $row['booking_id']; ?>"
                                       id="booking_id">
                                <button type="submit" name="accept" class="btn btn-success">
                                    <i class='fas fa-thumbs-up'></i> Accept
                                </button>

                            </form>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php
                $srno++;
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    ?>
    <div class="alert alert-danger">
        <h2><i class="fas fa-exclamation-triangle"></i> No Bookings Found !!</h2>
    </div>
    <?php
}
?>

</body>
</html>
