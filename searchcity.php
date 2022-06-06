<?php
include "connection.php";
$sel_cityname = "select * from cities";
$res_cityname = mysqli_query($con, $sel_cityname);

$cityname_in_array = "[";

while ($row_cityname = mysqli_fetch_array($res_cityname)) {
    $cityname_in_array .= "'" . $row_cityname['cityname'] . "',";
}
$cityname_in_array = trim($cityname_in_array, ",");
$cityname_in_array .= "]";

?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include "publicheader.php";
    ?>

    <script>
        $(document).ready(function () {
            var cname = <?php echo $cityname_in_array ?>;
            $("#cityname").autocomplete({
                source: cname
            });
        });

    </script>
    <script src="ticker.js"></script>

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <style>
        h1 {
            margin: 150px auto 100px auto;
            text-align: center;
        }
    </style>
    <title></title>

</head>
<body>

<?php
include "nav.php";
?>

<div class="container" style="margin-top: 50px">
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
        })();
    </script>

    <div class="text-center">
        <h4 class="alert alert-heading">Search City</h4>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <input type="text" class="form-control" id="cityname"  placeholder="Enter City Name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <input type="button" class="btn btn-success" value="Get Areas" onclick="get_public_area()">
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div id="areaname_in_div"></div>
    </div>
    <br>
    <div id="showavailablerental"></div>
</div>

<?php
include "footer.php";
?>

</body>
</html>
