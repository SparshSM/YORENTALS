<?php
session_start();
?>
<?php
include_once "rentalheader.php"
?>
<?php
include_once "rentalsidebar.php"
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
    <h1 align="center">Rental Dashboard</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #d2525e;">
                    <div class="card-body">
                        <h3>Add Vehicles</h3>
                        <a href="rentaladdcar.php" class="card-footer fixed-bottom" style="background-color: black">Add Vehicles<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color:#6f42c1;">
                    <div class="card-body">
                        <h3>View Vehicles</h3>
                        <a href="rentalviewcars.php" class="card-footer fixed-bottom" style="background-color: black">View Vehicles <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px; background-color: violet">
                    <div class="card-body">
                        <h3>View Bookings</h3>
                        <a href="view_bookings.php" class="card-footer fixed-bottom" style="background-color: black">View Bookings <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color:springgreen;">
                    <div class="card-body">
                        <h3>Add/View Areas</h3>
                        <a href="add_my_area.php" class="card-footer fixed-bottom" style="background-color: black">Add/View Areas<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #dee2e6 ;">
                    <div class="card-body">
                        <h3>View Reports</h3>
                        <a href="view_report.php" class="card-footer fixed-bottom" style="background-color: black">View Reports <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-3" style="width: 100%; height: 200px;background-color: #7abaff;">
                    <div class="card-body">
                        <h3>Change Password</h3>
                        <a href="rentalchangepass.php" class="card-footer fixed-bottom" style="background-color: black">Change Password
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>