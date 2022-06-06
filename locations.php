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
    <title>YO Rentals</title>

    <?php
    include_once "publicheader.php";
    ?>

    <script src="js/script.js"></script>
</head>
<style>
    body{
        background-image: url("backarea2.jpg");
        background-size: cover;
    }
</style>
<body>

<?php
if (isset($_SESSION['user_username'])) {
    include_once "usernav.php";
} else {
    include_once "nav.php";
}
?>

<div class="container">
    <div class="text-center mb-4"><br> <br>
        <h1 style="text-decoration: underline;font-family:'Engravers MT'  "><b>Our Servicable Places</b></h1>
    </div>

    <div class="col-lg-6 offset-lg-3">
        <div class="row">
            <div class="col-6 offset-3">
                <label for=city" style="font-size: 24px;font-family: 'Engravers MT';"><b>Select City</b></label> <br>
            </div>
<!--            <div class="col-9">-->
                <select onchange="getAreasToCity(this.value)" style="font-size: 16px;font-family:'Bell MT',cursive" name="city" id="city" class="form-control">
                    <option value="">Select City</option>

                    <?php
                    include_once "connection.php";

                    $select = "select * from cities";
                    $run = mysqli_query($con, $select);

                    while ($row = mysqli_fetch_assoc($run)) {
                        ?>
                        <option value="<?php echo $row['cityid']; ?>"><?php echo $row['cityname']; ?></option>
                        <?php
                    }
                    ?>
                </select> <br> <br> <br>
<!--            </div>-->
        </div>
    </div>
</div>
<div>
    <div style="display: none" class="alert alert-danger" id="result1"></div>
    <div id="result2"></div>
</div>

<?php
include_once "footer.php";
?>
</body>
</html>
