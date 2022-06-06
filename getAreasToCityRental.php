<?php
include_once "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//    $select = "SELECT * FROM `areas` WHERE cityid='10'";
    $select = "SELECT * FROM `areas` WHERE cityid='$id'";
    $run = mysqli_query($con, $select);

    if (mysqli_num_rows($run) > 0) {
        ?>
        <div class="col-4">
            <label for="area">Select Area <span class="text-danger">*</span></label>
        </div>
        <div class="col-8">
            <select data-rule-required="true" onchange="showButton(this.value)"
                    name="area" id="area" class="form-control">
                <option value="">Select Area</option>
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                    ?>
                    <option value="<?php echo $row['areaid']; ?>"><?php echo $row['areaname']; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <?php
    } else {
        echo "noservice";
    }
}