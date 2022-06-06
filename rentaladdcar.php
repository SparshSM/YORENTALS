<?php
session_start();
include_once "connection.php";
?>

<?php
if (isset($_SESSION['admin_email'])) {
    $username = ['admin_email'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
</head>

<?php
include_once "rentalsidebar.php";
?>

<body style="background-color:rgba(102,102,102,0.4);color: black !important; width: 100%">

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="text-center mb-5" style="font-family: 'Noto Serif', serif;">
                <ins><br>ADD CARS</ins>
            </h1>

            <form action="uploadrentalcar.php" method="post" enctype="multipart/form-data">
                <div class="form-group  form-row">
                    <label for="selectcar" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>select Car</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <?php
                        $selectQuery = "SELECT * FROM `fourwheelers`";
                        $exe = mysqli_query($con, $selectQuery);
                        ?>
                        <select name="Brand" id="Brand" class="form-control">
                            <option value="">Select Car</option>
                            <?php
                            while ($rows = mysqli_fetch_assoc($exe)) {
                                ?>
                                <option value="<?php echo $rows['Brand']; ?>"><?php echo $rows['Brand']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="form-group  form-row">
                    <label for="carname" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Car Name</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="carname" id="carname" placeholder="Enter car name"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="model" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Model</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="model" id="model" placeholder="Enter model"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="color" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Color</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="color" id="color" placeholder="Enter color"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="conditon" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Condition</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="condition" id="condition"
                               placeholder="Enter condition"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="description" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Description</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="description" id="description"
                               placeholder="Enter description"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="pic" class="col-sm-4 " style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Photo</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6 ">
                        <input type="file" required name="photo" id="photo" class="form-control-file">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="rcpic" class="col-sm-4 " style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>RC Photo</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6 ">
                        <input type="file" required name="rcpic" id="rcpic" class="form-control-file">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="regno" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Reg.No.</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" width="80%" required name="regno" id="regno" placeholder="Enter reg. no."
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="insurance" class="col-sm-4 " style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Insurance Validity</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="date" required name="insurance" id="insurance" width="80%"
                               placeholder="Enter insurance validity"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="rent" class="col-sm-4 " style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Rent</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="number" required name="rent" id="rent" width="80%"
                               placeholder="Enter rent cost"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group  form-row">
                    <!--                    <label for="admin_email" class="col-sm-4" style="font-family: 'Noto Serif', serif;">-->
                    <!--                        <h2>-->
                    <!--                            <ins> Rental User</ins>-->
                    <!--                        </h2>-->
                    <!--                    </label>-->
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                        <!--                        <input type="text" required name="admin_email" id="admin_email" width="80%"-->
                        <!--                               class="form-control bg-light" value="--><?php //echo $_SESSION['rentalID']; ?><!--">-->
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


