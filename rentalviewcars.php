<?php
session_start();
?><?php
include_once "rentalsidebar.php"
?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Records</title>
</head>
<link rel="stylesheet" href="view.css">
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

<style>
    #font {
        font-family: Acme;
    }
</style>
<body>
<div class="container" id="font"><br>
    <h1 class="text-center">AVAILABLE FOUR WHEELERS</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>BRAND</th>
            <th>MODEL</th>
            <th>MODEL YEAR</th>
            <th>COLOR</th>
            <th>CONDITION</th>
            <th>DESCRIPTION</th>
            <th>PHOTO</th>
            <th>REG_NO</th>
            <th>RENT</th>
            <th>STATUS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $rentalcars = "select * from rentalcars";
        $result = mysqli_query($con, $rentalcars);
        while ($row = mysqli_fetch_array($result)) {
            $currentStatus = 'Pending';
            if ($row[13] == 1) {
                $currentStatus = 'Accepted';
            }
            if ($row[13] == 2) {
                $currentStatus = 'Rejected';
            }
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td>
                    <img src="<?php echo $row[7]; ?>" alt="" style="width: 100px;height: 80px">
                </td>
                <td><?php echo $row[9]; ?></td>
                <td><?php echo $row[11]; ?></td>
                <td><?php echo $currentStatus; ?></td>
            </tr>
            <?php
            $srno++;
        }
        ?>
        </tbody>
    </table>
</div>

</body>
    </html><?php

