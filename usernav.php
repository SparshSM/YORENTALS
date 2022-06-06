<?php
include_once "connection.php";
?>

<?php
if (isset($_SESSION['user_username'])) {
    $username = $_SESSION['user_username'];
}
?>
<style>
    #vehicledropdown a:hover {
        background: #7abaff;
        color: black !important;
    }

    .nav-item:hover {
        background-color: steelblue;
        border-radius: 10px;
    }

    .nav-item {
        padding: 3px;
    }
</style>

<nav class="navbar navbar-dark bg-dark navbar-expand-md" style="background-color: black !important;">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mymenu">
        <ul class="navbar-nav">
                <a class="nav-link" href="index.php"><img src="Images/Logo.png" alt="Loading.."></a>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="index.php"><i
                            class="fa fa-home"></i>
                    Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userview4wheeler.php"
                   style="font-family: Verdana,sans-serif;color: white"><i class="fa fa-car-alt"></i> Vehicles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="locations.php"><i
                            class="fa fa-map-marker"></i> Locations</a>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="Aboutus.php"><i
                            class="fa fa-info-circle "></i> About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="contactus.php"><i
                            class="fa fa-phone-alt"></i> Contact Us</a>
            </li>

<!--            <li class="nav-item">-->
<!--                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white"-->
<!--                   href="view_my_bookings.php">My Bookings-->
<!--                </a>-->
<!--            </li>-->

            <li class="nav-item dropdown">
                <!--            <input type="button" class="btn" id="loginbutton" value="Rahul"  data-toggle="modal" data-target="#regForm">-->
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                   style="font-family: Verdana,sans-serif;color: white;"><i
                            class="fa fa-user"></i> <?php echo $_SESSION['user_username']; ?> </a>
                <div class="dropdown-menu" id="vehicledropdown" style="background-color: black !important;">
                    <a class="dropdown-item" style="color: white;" id="dropdown-menu" href="userprofile.php"><i
                                class="fa fa-user"></i> My
                        Profile </a>
                    <a class="dropdown-item" style="color: white;" id="dropdown-menu" href="view_my_bookings.php"><i
                                class="fa fa-book"></i> My
                        Bookings</a>
                    <a class="dropdown-item" style="color: white;" id="dropdown-menu" href="userchangepass.php"><i
                                class="fa fa-edit"></i>
                        Change Password</a>
                    <a class="dropdown-item" style="color: white;" id="dropdown-menu"
                       onclick="return confirm('Are you sure to Logout ?')" href="userlogout.php"><i
                                class="fas fa-sign-out-alt"></i> Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>