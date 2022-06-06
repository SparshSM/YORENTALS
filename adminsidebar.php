<?php
@session_start();
include_once "header.php"
?>
<link rel="stylesheet" href="adminsidebar.css">

<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

<style>
    #font{
        font-family: Acme;
    }
</style>
<script src="adminsidebar.js"></script>
<div class="wrapper" id="font">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Vehicle Rental Management System <i class="fas fa-car"></i> <i class="fas fa-bicycle"></i></h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Vehicles<i class="fas fa-car"></i></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addfourwheelersbrand.php">Add Brand </a>
                    </li>
                    <li>
                        <a href="adminviewfourwheelersbrand.php">View/Manage Brand</a>
                    </li><li>
                        <a href="add4wheeler.php">Add Four Wheelers </a>
                    </li>
                    <li>
                        <a href="view4wheeler.php">View Four Wheelers</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#citySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cities <i class="fas fa-city"></i></a>
                <ul class="collapse list-unstyled" id="citySubmenu">
                    <li>
                        <a href="adminaddcity.php">Add City </a>
                    </li>
                    <li>
                        <a href="adminviewcity.php">View/Manage Cities</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#areaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Areas <i class="fas fa-road"></i></a>
                <ul class="collapse list-unstyled" id="areaSubmenu">
                    <li>
                        <a href="addarea.php">Add Area </a>
                    </li>
                    <li>
                        <a href="viewarea.php">View/Manage Areas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#rentalSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Rentals <i class="fas fa-users"></i></a>
                <ul class="collapse list-unstyled" id="rentalSubmenu">
                    <li>
                        <a href="Viewrentals.php">View Rentals </a>
                    </li>
                    <li>
                        <a href="Managerentals.php">Manage Rentals</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="adminviewbooking.php">View Bookings <i class="fas fa-book-reader"></i></a>
            </li>

            <li>
                <a href="adminviewreport.php">View Reports <i class="fas fa-book-reader"></i></a>
            </li>
            <li>
                <a href="adminviewregusers.php">Registered Users <i class="fas fa-users"></i></a>
            </li>
            <li>
                <a href="adminviewqueries.php">View Contact Us Queries <i class="fas fa-question-circle"></i></a>
            </li>

        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fas fa-align-justify"></i>
                    <span> </span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="admindashboard.php">Home<i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminchangepass.php">Change Password<i class="fas fa-user-edit"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="return confirm('Are you sure to Logout ?')"
                               href="logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
