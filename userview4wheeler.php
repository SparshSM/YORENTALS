<?php
session_start();
include_once "publicheader.php";
?>
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
    <link rel="stylesheet" href="userviewvehicles.css">
    <h1 align="center" style="padding-top:15px;font-family: 'Eras Medium ITC'">Available Four Wheelers</h1>
<?php
include_once "connection.php";
$viewcars= "select * from rentalcars";
$result = mysqli_query($con, $viewcars);
while ($row = mysqli_fetch_array($result)){
    ?>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $row[7]; ?>"></div>
                    <div class="col-md-6 mt-1">
                        <h5><?php echo $row[1],$row[2];?></h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>Model: <?php echo $row[3];?></span><span class="dot"></span><span>Color: <?php echo $row[4];?></span><span class="dot"></span><span>Condition: <?php echo $row[5];?><br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Reg Number: <?php echo $row[9];?></span><span class="dot"></span><span> Insurance Val: <?php echo $row[10];?><br></span></div>
                        <p class="text-justify para mb-0"><?php echo $row[6];?><br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1"> &#8377; <?php echo $row[11];?></h4>
                        </div>
<!--                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button"><a-->
<!--                                        href="booking.php?" style="color: black">Book Now</a></button></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
include_once "footer.php";
?>