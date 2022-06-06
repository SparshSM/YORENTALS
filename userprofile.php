<?php
include_once "connection.php";
include_once "publicheader.php";
include_once "usernav.php";
?>
<?php
$username = $_SESSION['user_username'];
$user_details = "select * from signup where username='$username'";
$go = mysqli_query($con, $user_details);
while ($row = mysqli_fetch_assoc($go)) {
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <link rel="stylesheet" href="userprofile..css">
</head>

<body>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-10">
                <div class="profile-head">
                    <h5>
                        <?php echo $name; ?>
                        <i
                                class="fa fa-user"></i>
                    </h5>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $_SESSION['user_username']; ?></>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $name; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $email; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $mobile; ?></p>
                            </div>
                        </div>
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-md-6">-->
                        <!--                                <label>Profession</label>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-md-6">-->
                        <!--                                <p>Web Developer and Designer</p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                    <!--                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <label>Experience</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <p>Expert</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <label>Hourly Rate</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <p>10$/hr</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <label>Total Projects</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <p>230</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <label>English Level</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <p>Expert</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <label>Availability</label>-->
                    <!--                            </div>-->
                    <!--                            <div class="col-md-6">-->
                    <!--                                <p>6 months</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="row">-->
                    <!--                            <div class="col-md-12">-->
                    <!--                                <label>Your Bio</label><br/>-->
                    <!--                                <p>Your detail description</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>
