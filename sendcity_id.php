<?php
session_start();
include 'connection.php';
$email = $_SESSION["rental_email"];
$rental_id = $_SESSION["rental_id"];


$city_id = $_REQUEST['cityid'];

?>
<div id="output">
    <h1>Available Areas</h1>
    <div class="row jumbotron">
        <?php
        $sel_areas = "select * from areas WHERE cityid='$city_id'";
        $result_area_name = mysqli_query($con, $sel_areas);
        if (mysqli_num_rows($result_area_name) > 0) {
            while ($row_area = mysqli_fetch_array($result_area_name)) {
                /*$sql = "select * from `rental_areas` where area_id=" . $row_area[0] . " and rental_id='$rental_id'";
                $sql_result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($sql_result) > 0) {
                    $sql_row = mysqli_fetch_array($sql_result);*/
                ?>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="checkbox"
                           value="<?php echo $row_area['areaid']; ?>"
                           name="ch[]" id="area_id"> <?php echo $row_area['areaname']; ?>
                </div>
                <?php
                //  }
            }
        } else {
            echo "No Data Found";
        }
        ?>
    </div>

    <div class="form-group">
        <input type="submit" value="Add Areas" class="btn btn-primary">
    </div>
</div>
