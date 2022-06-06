<?php
session_start();
?>
<?php
include_once "header.php"
?>
<?php
include_once "adminsidebar.php"
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(45, 78, 0, 0.2);
            transform: scale(1.05);
            cursor: pointer;
        }

        div a:hover {
            color: #a71d2a;
        }
    </style>
</head>

<body>
    <h1 align="center">Admin Dashboard</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #d2525e;">
                    <div class="card-body">
                        <h3>Manage Areas</h3>
                        <a href="viewarea.php" class="card-footer fixed-bottom" style="background-color: black">Manage Areas<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px; background-color: violet">
                    <div class="card-body">
                        <h3>Manage Bookings</h3>
                        <a href="adminviewbooking.php" class="card-footer fixed-bottom" style="background-color: black">View Bookings <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color:springgreen;">
                    <div class="card-body">
                        <h3>View Users</h3>
                        <a href="adminviewregusers.php" class="card-footer fixed-bottom" style="background-color: black">View Users <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #dee2e6 ;">
                    <div class="card-body">
                        <h3> Queries</h3>
                        <a href="adminviewqueries.php" class="card-footer fixed-bottom" style="background-color: black">View Queries <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color:#6f42c1;">
                    <div class="card-body">
                        <h3>Manage Vehicles</h3>
                        <a href=adminviewfourwheelersbrand.php class="card-footer fixed-bottom" style="background-color: black">Manage Vehicles<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #7abaff;">
                    <div class="card-body">
                        <h3>Manage Rentals</h3>
                        <a href="Managerentals.php" class="card-footer fixed-bottom" style="background-color: black">Manage Rentals
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>