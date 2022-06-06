<?php
include_once "connection.php";
?>

<?php
include_once "publicheader.php";
?>
<div style="background-color:rgba(227,4,4,0.4);color: #000000 !important; width: 100%">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="text-center mb-5" style="font-family: 'Noto Serif', serif;">
                <ins><br>Select Servicable Area</ins>
            </h1>
            <form action="#" method="post" enctype="multipart/form-data" METHOD="post">
                <div class="form-group  form-row">
                    <label for="city" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Select city</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <?php
                        $selectQuery = "SELECT * FROM `cities`";
                        $exe = mysqli_query($con, $selectQuery);
                        ?>
                        <select onchange="getCheckbox(this.value)" name="city" id="city" class="form-control">
                            <option value="">Select City</option>
                            <?php
                            while ($rows = mysqli_fetch_array($exe)) {
                                ?>
                                <option value="<?php echo $rows[0]; ?>"><?php echo $rows[1]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row" id="CHECKBOX">
<!--                        <div id="CHECKBOX"></div>-->
                    </div>
                </div>
                <div class="form-group  form-row">
                    <label for="submit" class="col-sm-4" style="font-family: 'Noto Serif', serif;">
                        <input type="submit" class="btn btn-danger" value="submit">
                    </label>

            </form>
        </div>
    </div>
</div>

<script>

    function getCheckbox(id) {
        // console.log(id);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            console.log(this.response);
            document.getElementById("CHECKBOX").innerHTML = this.response;
        }
        xhttp.open("GET", "generateCheckbox.php?id=" + id, true);
        xhttp.send();
    }

</script>