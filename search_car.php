<?php
session_start();
include_once 'connection.php';
$cityname_in_array = '';
$select = "select * from cities";
$run = mysqli_query($con, $select);

while ($row = mysqli_fetch_assoc($run)) {
    $cityname_in_array .= '"' . $row['cityname'] . '",';

}
$cityname_in_array = trim($cityname_in_array, " \t\n\r\0\x0B");
//print_r($cityname_in_array);
?>


<html lang="en">
<head>
    <link rel="stylesheet" href="jquery-ui.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YO Rentals</title>

    <?php
    include_once "publicheader.php";
    ?>
    <style>
        body {
            background-size: cover;
            background-image: linear-gradient(#11998E,#38EF7D) !important;

        }
    </style>

    <script src="js/script.js"></script>
    <script src="ticker.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        var cname = [<?php echo $cityname_in_array ?>];
        $("#cityname").autocomplete({
            source: cname
        });
    });
</script>
<?php
if (isset($_SESSION['user_username'])) {
    include_once "usernav.php";
} else {
    include_once "nav.php";
}
?>
<div class="container py-5">
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })()
    </script>
    <div class="text-info text-center mb-4">
        <h1 style="text-decoration: underline; color: #d14529; font-family: 'Book Antiqua'">Select Your City</h1>
    </div>

    <div class="col-lg-6 offset-lg-3">
        <div class="row">
            <div class="col-sm-8 offset-1">
                <input type="text" name="cityname" id="cityname" class="form-control">
            </div>
            <div class="form-group form-inline">
                <input type="button" class="btn btn-primary" value="Get Areas" onclick="get_public_area()"
                       style="background-color: #e3001f;">
            </div>
        </div>
    </div>
    <div class="row">
        <div id="areaname_in_div"></div>
        <div id="showavailablerental"></div>
    </div>
    <br>
    <div id="rentalscars" style="display: none"></div>
    <div id="nocars" style="display: none" class="alert alert-danger">
        <h4><i class="fas fa-exclamation-triangle"></i> No Cars Available In This Area !!</h4>
    </div>
</div>

<?php
//include_once "footer.php";
//?>
<script>
    function get_public_area() {
        var cityname, xhttp;
        cityname = document.getElementById('cityname').value;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('areaname_in_div').innerHTML = this.responseText;
            } else {
                document.getElementById('areaname_in_div').innerHTML = "Getting Areas Please Wait........";
            }
        }
        xhttp.open("GET", "get_area.php?cityname=" + cityname, true);
        xhttp.send();
    }
</script>
<script src="jquery-ui.js"></script>
</body>
</html>