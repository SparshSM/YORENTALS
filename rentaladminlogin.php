<?php
session_start();
$email = $password = $emailError = $passwordError = "";
//$isShowModal = false;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once "connection.php";

    $selectcmd = "select * from rentals where email='$email'";
    $data = mysqli_query($con, $selectcmd);
    if (mysqli_num_rows($data) == 0) {
        $emailError = "Invalid Email";
    } else {
        $row = mysqli_fetch_assoc($data);

        if ($row['approve'] == 2) {
            ?>
            <script>
                alert("Your Request is Rejected by Admin");
            </script>
            <?php

        } elseif ($row['approve'] == 0) {
            ?>
            <script>
                alert("Your Request is not yet approved by Admin");
            </script>
            <?php
        } else {
            if ($row['password'] == $password) {
                $_SESSION['rentalID'] = $row['id'];
                $_SESSION['admin_email'] = $email;
                header("Location:rentaldashboard.php");
            } else {
                $passwordError = "Incorrect Password";
            }
        }
//        $isShowModal = true;
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        body {
            background-image: url(Images/Adminbg.jpeg);
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
    <title>Car Rental Portal | Rental Login</title>
    <?php
    //        include_once "rentalheader.php"
    ?>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<!--<img src="Images/Adminbg.jpeg" alt="" width="100%" height="100%" style="background">-->
<div class="container" align="center">
    <div class="login-page">
        <div class="form-content">
            <div class="container" style="margin-top: 10%">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card" style="background-color:rgba(0,0,0,0.7); border-radius: 3%;">
                        <h1 class="text-center text-light text-bold  mt-4x" style="margin-top:5%;">Rental Login </h1>
                        <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2" style="margin-left: 8%;margin-right: 4%">
                                <form method="post" id="login" style="text-align:left;">
                                    <label for="email" class="text-uppercase text-white text-sm"
                                           style="margin-top: 2%;">Email</label>
                                    <input type="text" placeholder="email" name="email" id="email"
                                           class="form-control mb">
                                    <?php
                                    if ($emailError != '') {
                                        echo "<label class='error' style='color: red;'>$emailError</label>";
                                    }
                                    ?>
                                    <br>
                                    <label for="password" class="text-uppercase text-white text-sm"
                                           style="margin-top: 2%">Password</label>
                                    <input type="password" placeholder="Password" name="password" id="password"
                                           class="form-control mb">
                                    <?php
                                    if ($passwordError != '') {
                                        echo "<label class='error' style='color: red;'>$passwordError</label>";
                                    }
                                    ?>
                                    <button class="btn btn-dark btn-block" name="login" type="submit"
                                            value="Login"
                                            style="margin-top: 10%;margin-bottom: 2%">LOGIN
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>