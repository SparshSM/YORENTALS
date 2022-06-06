<?php
session_start();
include_once "connection.php";
if (isset($_REQUEST['aid']) && isset($_REQUEST['cid'])) {
    $a_id = $_REQUEST['aid'];
    $c_id = $_REQUEST['cid'];

    $query = "SELECT * FROM `rentalareas` WHERE areaid='$a_id' AND cityid='$c_id'";
//    $query = "SELECT * from rentalcars,rentals where rentalcars.rental_id=rentals.id and rental_id in (select rental_id from rentalareas WHERE areaid='$a_id' && cityid='$c_id')";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($run)) {
            $rental_id = $row['rentalid'];

            $select = "SELECT rentalcars.*,rentals.name FROM `rentalcars` INNER JOIN rentals on rentalcars.rental_id=rentals.id WHERE rental_id='$rental_id'";
            $go = mysqli_query($con, $select);

            if (mysqli_num_rows($go) > 0) {
                while ($rental_row = mysqli_fetch_assoc($go)) {
                    ?>

                    <link rel="stylesheet" href="userviewvehicles.css">
                    <div class="container mt-5 mb-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="row p-2 bg-white border rounded">
                                    <div class="col-md-6 mt-1"><img alt="car image"
                                                                    class="img-fluid img-responsive rounded product-image"
                                                                    src="<?php echo $rental_row['photo']; ?>"></div>
                                    <div class="col-md-6 mt-1">
                                        <h5><?php echo $rental_row['Company'], $rental_row['car_name']; ?></h5>
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2"><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <span>310</span>
                                        </div>
                                        <div class="mt-1 mb-1 spec-1">
                                            <span>Model: <?php echo $rental_row['model']; ?></span><span
                                                    class="dot"></span><span>Color: <?php echo $rental_row['color']; ?></span><span
                                                    class="dot"></span><span>Condition: <?php echo $rental_row['conditions']; ?><br></span>
                                        </div>
                                        <div class="mt-1 mb-1 spec-1">
                                            <span>Reg Number: <?php echo $rental_row['reg_no']; ?></span><span
                                                    class="dot"></span><span> Insurance Val: <?php echo $rental_row['insurance_validity']; ?><br></span>
                                        </div>
                                        <p class="text para mb-0"><?php echo $rental_row['description']; ?><br><br>
                                        </p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="mr-1"> &#8377; <?php echo $rental_row['rent']; ?></h4>
                                        </div>
                                        <div class="d-flex flex-column mt-4">
                                            <a href="booking.php?carid=<?php echo $rental_row['id']; ?>&cityid=<?php echo $c_id; ?>&areaid=<?php echo $a_id; ?>"
                                               class="btn btn-success btn-sm">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
            }
        }
    }
    ?>
    <?php
}
//    include_once "footer.php";
?>
