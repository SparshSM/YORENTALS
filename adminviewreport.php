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
    <title>View Report</title>
</head>
<body>

<?php
include_once "header.php";
include_once "adminsidebar.php";
?>

<h1 class="text-center">Bookings Report</h1>
<hr>

<?php
$srno = 1;
include_once "connection.php";

$fetch_booking = "SELECT bills.*,booking.username,booking.mycar_id FROM `bills` INNER JOIN booking ON bills.booking_id=booking.booking_id ORDER BY bill_id DESC";
//$fetch_booking = "SELECT * FROM `bills` ORDER BY bill_id DESC";
$run = mysqli_query($con, $fetch_booking);

if (mysqli_num_rows($run) > 0) {
    ?>
    <div class="table-responsive mt-5">
        <table class="table table-striped">
            <thead>
            <tr class="bg-info text-white">
                <th>Bill ID</th>
                <th>Customer Username</th>
                <th>Car</th>
                <th>Paid On</th>
                <th>GST %</th>
                <th>Grand Total</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
                ?>
                <tr>
                    <td><?php echo $row['booking_id'] ?></td>
                    <td>
                        <?php
                        $username = $row['username'];

                        $select_name = "SELECT * FROM `signup` WHERE username='$username'";
                        $result_name = mysqli_query($con, $select_name);
                        $row_name = mysqli_fetch_assoc($result_name);
                        echo $row_name['name'];
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

                    <td><?php echo $row['bill_date'] ?></td>

                    <td>12 %</td>

                    <td><?php echo $row['grand_total'] ?></td>
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
        <h2><i class="fas fa-exclamation-triangle"></i> No Reports Found !!</h2>
    </div>
    <?php
}
?>


</body>
</html>
