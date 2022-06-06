<?php
include_once "rentalheader.php"
?>

<link rel="stylesheet" href="rentalsidebar.css">

<script src="rentalsidebar.js"></script>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Vehicle Rental Management System <i class="fas fa-car"></i> <i class="fas fa-bicycle"></i></h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Vehicles <i class="fas fa-car"></i>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="rentaladdcar.php">Add Vehicles </a>
                    </li>
                    <li>
                        <a href="rentalviewcars.php">View Vehicles</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="add_my_area.php">Add/View Areas <i class="fas fa-road"></i></a>
            </li>

            <li>
                <a href="view_bookings.php">View Bookings <i class="fas fa-book-reader"></i></a>
            </li>

            <li>
                <a href="view_report.php">View Reports <i class="fas fa-book-reader"></i></a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-dark">
                    <i class="fas fa-align-justify"></i>
                    <span> </span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="rentaldashboard.php">Home<i class="fas fa-home"></i></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="rentalchangepass.php">Change Password<i
                                        class="fas fa-user-edit"></i></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" onclick="return confirm('Are you sure to Logout ?')"
                               href="rentallogout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
