<?php
session_start();
include_once "connection.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
    include_once "publicheader.php";
    ?>

    <script src="js/rental_script.js"></script>
    <!-- sweet alert 2 -->
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>

<body>

    <?php
    include_once "rentalsidebar.php";
    ?>

    <div class="container">
        <div>
            <h2 class="text-center text-info">Add My Areas</h2>

            <div class="col-lg-6 offset-lg-3">
                <form id="AddRentalAreaForm">
                    <div class="row">
                        <div class="col-4">
                            <label for="city">Select City <span class="text-danger">*</span></label>
                        </div>
                        <div class="col-8">
                            <select data-rule-required="true" onchange="getAreasToCityRental(this.value)" name="city" id="city" class="form-control">
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
                            </select>
                        </div>

                        <div>
                            <div style="display: none" class="mt-3 alert alert-danger" id="result1"></div>
                        </div>
                    </div>

                    <div class="row mt-3" id="result2"></div>

                    <div style="display: none" class="text-right mt-3" id="buttonDiv">
                        <input type="hidden" name="addarea" id="addarea" value="addarea">
                        <button type="submit" class="btn btn-primary">Add Area</button>
                        <!--                        <button onclick="saveRentalArea()" type="button" class="btn btn-primary">Add Area</button>-->
                    </div>
                </form>
            </div>

            <div class="mt-5">
                <hr>
                <h2 class="text-center text-info">My Areas</h2>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-info text-white text-center">
                                <th>Sr No</th>
                                <th>City</th>
                                <th>Area</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $srno = 1;
                            $select = "SELECT rentalareas.*,rentalareas.cityid,areas.areaname,cities.cityname FROM `rentalareas`INNER JOIN areas on rentalareas.areaid=areas.areaid INNER JOIN cities ON rentalareas.cityid=cities.cityid ORDER BY `cities`.`cityname` ASC";
                            $run = mysqli_query($con, $select);

                            while ($row = mysqli_fetch_assoc($run)) {
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $row['cityid']; ?></td>
                                    <td><?php echo $row['cityname']; ?></td>
                                    <td><?php echo $row['areaname']; ?></td>
                                    <td>
                                        <form onsubmit="return confirm('Are you Sure to Delete ?')" action="rentalmanagearea.php" method="post">
                                            <!-- <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="areaid" value="<?php echo $row[0]; ?>" id="cityid"> -->
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i>Delete</button>
                                    </td>
                                </tr>
                            <?php
                                $srno++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            // Add Area
            $('#AddRentalAreaForm').submit(function(event) {
                event.preventDefault();

                // if ($(this).valid()) {
                $.ajax({
                    url: 'addRentalArea.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        console.log(data);
                        if (data === 'success') {
                            Swal.fire({
                                title: 'Area Added',
                                icon: 'success'
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else if (data === 'exist') {
                            Swal.fire({
                                title: 'This Area Already Exist !',
                                icon: 'warning'
                            });
                        } else {
                            Swal.fire({
                                title: 'Something Went Wrong !',
                                icon: 'warning'
                            });
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
                // } else {
                //     console.log("I'm NOT a valid form!");
                //     //Stop the normal submit of the browser
                //     return false;
                // }
            });
        });
    </script>

    <!-- sweet alert 2 -->
    <script src="js/sweetalert2.min.js"></script>

</body>

</html>