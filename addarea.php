<?php
session_start();
include_once "connection.php";
?>

<?php
//if (isset($_SESSION['admin_email'])) {
//    $username = ['admin_email'];
//}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--    <link rel="stylesheet" href="css/bootstrap1.css">-->
    <?php
    include_once "header.php";
    ?>
</head>

<?php include_once "adminsidebar.php"; ?>

<body style="background-color:rgba(102,102,102,0.4);color: black !important; width: 100%">
<!--<body>-->
<div style="background-color:rgba(102,102,102,0.4);color: black !important; width: 100%">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="text-center mb-5" style="font-family: 'Noto Serif', serif;">
                <ins><br>ADD AREA</ins>
            </h1>
            <form action="uploadarea.php" method="post" enctype="multipart/form-data" METHOD="post">
                <div class="form-group  form-row">
                    <label for="city" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins> Select City</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <?php
                        $selectQuery = "SELECT * FROM `cities`";
                        $exe = mysqli_query($con, $selectQuery);
                        ?>
                        <select name="city" id="city" class="form-control">
                            <option value="">Select City</option>
                            <?php
                            while ($rows = mysqli_fetch_assoc($exe)) {
                                ?>
                                <option value="<?php echo $rows['cityid']; ?>"><?php echo $rows['cityname']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group  form-row">
                    <label for="areaname" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Area Name</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="areaname" id="areaname"
                               placeholder="Enter area name" class="form-control bg-light">
                    </div>
                </div>

                <div class="form-group form-row">
                    <div class="col-sm-8 offset-sm-4">
                        <input type="submit" value="Submit" class="btn btn-dark align-self-xl-end"
                               style="width: 100px; height: 45px ">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>


