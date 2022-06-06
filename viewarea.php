<?php
session_start();
include_once "connection.php";
?>
<title>View Area</title>

<?php
include_once "header.php";
?>
<?php
include_once "adminsidebar.php";
?>
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
        <select onchange="getAreas(this.value)" name="city" id="city" class="form-control">
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
<div class="container">
    <h2 class="text-center">View Area</h2>

    <div id="table">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>CITY NAME</th>
                    <th>Area Name</th>

                    <th class="text-center" colspan="2">Controls</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $srno = 1;
                $selectareas = "SELECT areas.*,cities.cityname FROM `areas` INNER JOIN cities ON areas.cityid=cities.cityid";
                //        $selectareas = "select * from areas";
                $result = mysqli_query($con, $selectareas);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $srno; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <!--                <td>--><?php //echo $row[2]; 
                                                    ?>
                        <!--</td>-->

                        <td><a href='admineditarea.php?areaid=<?php echo $row[0]; ?>' class='btn btn-warning'> <i class='fas fa-edit'></i> Edit
                            </a>
                        </td>
                    </tr>
                <?php
                    $srno++;
                }


                ?>

            </tbody>
        </table>
    </div>

    <div id="result"></div>
</div>

<script>
    function getAreas(id) {
        // console.log(id);

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let response = JSON.parse(this.response);

                let html = "<table class='table table-bordered table-striped'>";
                html += "<thead><tr>";
                html += "<th>Sr No</th>";
                html += "<th>CITY NAME</th>";
                html += "<th>Area Name</th>";
                html += "<th colspan='2'>Controls</th>";
                html += "</tr></thead>";

                html += "<tbody>";

                let srno = 1;
                for (let i = 0; i < response.length; i++) {
                    html += "<tr>";
                    html += "<td>" + srno + "</td>";
                    html += "<td>" + response[i].areaname + "</td>";
                    html += "<td>" + response[i].cityname + "</td>";

                    html += "<td><button onclick='' class='btn btn-warning'><i class='fas fa-edit'></i> Edit</button></td>";
                    html += "</tr>";
                    srno++;
                }
                html += "</tbody>";

                html += "</table>";

                document.getElementById("table").innerHTML = "";
                document.getElementById("result").innerHTML = html;
            }
        }
        xhttp.open("GET", "getAreasofCities.php?id=" + id, true);
        xhttp.send();
    }
</script>