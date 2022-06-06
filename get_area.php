<?php
include "connection.php";
$cityname = $_GET['cityname'];
$sel_city_id = "select * from cities WHERE cityname='$cityname'";
$res_city_id = mysqli_query($con, $sel_city_id);
$row_city_id = mysqli_fetch_array($res_city_id);
if (mysqli_num_rows($res_city_id) > 0) {
    $areaname = "select * from areas WHERE cityid=$row_city_id[0]";
    $res_area_name = mysqli_query($con, $areaname);
    ?>
    <div class="form-group">
        <div class="form-group">
            <input type="hidden" name="tb_cityid" id="cityid" value="<?php echo $row_city_id[0]; ?>"
                   class="form-control">
        </div>

        <?php
        while ($row_area_name = mysqli_fetch_array($res_area_name)) {
            ?>
            <div class="col-md-3 col-sm-3 col-lg-3" style="display: inline">
                <?php /*echo $row_area_name['area_id']; */ ?>
                <input type="radio" name="rbarea" onclick="getRental(this.value)" value="<?php echo $row_area_name['areaid']; ?>">
                <span class="text-capitalize" style="border: 2px groove #d14529;background: #c7c0ff"><?php echo $row_area_name['areaname']; ?></span>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
} else {
    echo "No Available Service in the city you entered";
}



