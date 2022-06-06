<?php
session_start();
include_once "connection.php";
//include_once "login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YO Rentals</title>

    <?php
    include_once "publicheader.php";
    ?>

</head>
<body>

<?php
if(isset($_SESSION['user_username']))
{
//    echo "<script>alert('if')</script>";
    include_once "usernav.php";

}else {
//    echo "<script>alert('else')</script>";
    include_once "nav.php";

}
?>

<img src="Images/Bgindex.jpg" alt="" style="width: 100%;height: 350px;">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
</style>

<div style="text-align: center;position:center; margin-top:-5%;">
    <h1 id="book" style="font-weight: bolder;font-size:450%;color:#c20f39;display: inline-block">Find The
        Best Car For You</h1>
    <!--    <h1 style="display:inline-block;font-weight: normal;color: white"></h1>-->
</div>

<div id="div" class="font-effect-shadow-multiple" style="padding: 20px;margin-top: 2%">
    <h1 style="font-size: 270%">
        <a href="search_car.php" style="color: white;text-decoration: none">BOOK NOW
            <img src="Images/SSarrow.png" height="55" alt="Loading..">
        </a>
    </h1>
</div>

<div class="advantage">
    <h2 style="text-align: center;margin-top:5%;margin-bottom:20px">YO RENTALS ADVANTAGE</h2>
    <p style="text-align: center;font-size: 24px;">We simplified car rentals, so you can focus on what's important to you.</p>
</div>

<div class="container">
    <div class="row m-5">
        <div class="col-lg-6 mb-5">
            <div class="card" style="width: 23rem;height: 350px">
                <img class="card-img-top" src="Images/Sublogo3.png" width="30%" alt="Loading...">
                <div class="card-body">
                <div class="size">
                    <h5 class="card-title">Flexi Pricing Packages</h5> </div>
                    <p class="card-text">Choose a balance of time and kilometers that works best for you.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="card" style="width: 23rem;height: 350px">
                <img class="card-img-top" src="Images/Sublogo2.png" width="30%" alt="Loading...">
                <div class="card-body">
                    <div class="size">
                        <h5 class="card-title">No Hidden Charges</h5></div>
                    <p class="card-text">Our prices include taxes and insurance.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="card" style="width: 23rem;height: 350px">
                <img class="card-img-top" src="Images/Sublogo6.png" style="height: 250px;" width="30%" alt="Loading...">
                <div class="card-body"> <div class="size">
                        <h5 class="card-title">Go Anywhere</h5></div>
                    <p class="card-text">Go anywhere you want to go.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="card" style="width: 23rem;height: 350px">
                <img class="card-img-top" src="Images/Sublogo5.png" style="height: 250px;" width="30%" alt="Loading...">
                <div class="card-body"> <div class="size">
                        <h5 class="card-title">24x7 Roadside Assistance</h5></div>
                    <p class="card-text">Help is never far away from you.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="demo" class="carousel" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/Reviewbg1.jpg" height="400" width="100%" alt="Loading..">
            <div align="center" class="carousel-caption">
                <div style="margin-bottom: 8%;">
                    <h3 style="font-weight: lighter">"It was great pleasure use YO service, As all process being online
                        it was really hassle free
                        experience. good service please keep it going." </h3><br>
                    <h3 style="color: #70ad4d">- Manik Sharma</h3>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Images/Reviewbg1.jpg" height="400" width="100%" alt="Loading..">
            <div class="carousel-caption">
                <div style="margin-bottom: 4%">
                    <h3 style="font-weight: lighter">"Appreciate the totally new welcome Concept. As an prospective
                        customer, I feel this is going to
                        really set an example in car rentals scenery. Wishing you the very Best and come out in flying
                        colors!!"</h3><br>
                    <h3 style="color: #70ad4d">- Himanshu Madaan</h3>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div>
                <img src="Images/Reviewbg1.jpg" height="400" width="100%" alt="Loading..">
                <div class="carousel-caption">
                    <div style="margin-bottom: 8%;">
                        <h3 style="font-weight: lighter">"Select your car. Pay. Drive. Return. The YO Rentals booking
                            process is as simple as this.
                            Butter
                            cannot
                            be smoother than this."</h3><br>
                        <h3 style="color: #70ad4d">- Ashan Kaur </h3>
                    </div>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<?php
include_once "footer.php";
?>

</body>
</html>
