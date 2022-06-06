<style>
    #vehicledropdown a:hover {
        background: #7abaff;
        color: black !important;
    }

    .nav-item:hover {
        background-color: steelblue;
        border-radius: 10px;
    }

    .nav-item {
        padding: 3px;
    }
</style>
<nav class="navbar navbar-dark bg-dark navbar-expand-md" style="background-color: black !important;">
    <a class="nav-link" href="index.php"><img src="Images/Logo.png" alt="Loading.."></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navmenu">
        <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="index.php"><i
                            class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userview4wheeler.php"
                   style="font-family: Verdana,sans-serif;color: white"><i class="fa fa-car-alt"></i> Vehicles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="locations.php"><i
                            class="fa fa-map-marker"></i> Locations</a>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="Aboutus.php"><i
                            class="fa fa-info-circle "></i> About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-family:Verdana,sans-serif;color: white" href="contactus.php"><i
                            class="fa fa-phone-alt"></i> Contact Us</a>
            </li>

            <li class="nav-item">
                <input type="button" id="loginbutton" value="User Login" class="btn" onclick="showModals()">
            </li>

            <li class="nav-item">
                <input type="button" id="loginbutton" value="Join Us" class="btn" onclick="showrentmodals()">
            </li>
        </ul>
    </div>
</nav>
<script>
    function showModals() {
        <?php

        if (!isset($_SESSION['user_username'])) {
        ?>
        $('#regForm').modal('show')
        card.style.transform = "rotateY(0deg)";
        <?php
        }
        ?>

    }
</script>
<script>
    function showrentmodals() {
        $('#rentalform').modal('show')
        card.style.transform = "rotateY(0deg)";
    }
</script>
<?php

?>
<?php

?>
