<?php
include_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//    $select = "SELECT * FROM `areas` WHERE cityid='10'";
    $select = "SELECT * FROM `areas` WHERE cityid='$id'";
    $run = mysqli_query($con, $select);

    if (mysqli_num_rows($run) > 0) {
        ?>
        <div class="form-group">
            <input type="hidden" name="cityID" id="cityID" value="<?php echo $id; ?>" class="form-control">

            <div class="form-inline">
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-3" style="font-family: 'Bodoni MT',cursive;font-size: 28px;">
                        <input type="hidden" onclick="getRental(this.value)" value="<?php echo $row['areaid']; ?>"
                               name="area" id="area">
                        <span class="text-capitalize" style="border: 2px groove #d14529;background: #c7c0ff"><?php echo $row['areaname']; ?></span>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    } else {
        echo "noservice";
    }
}