<?php
@session_start();
$username = $password = $usernameError = $passwordError = "";
//$isShowModal = false;

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once "connection.php";

    $selectcmd = "select * from admin where username='$username'";
    $data = mysqli_query($con, $selectcmd);

    if (mysqli_num_rows($data) == 0) {
        $usernameError = "Invalid Username";
    } else {
        $row = mysqli_fetch_assoc($data);
        if ($row['password'] == $password) {
            $_SESSION['admin_username'] = $username;
            header("Location:admindashboard.php");
        } else {
            $passwordError = "Incorrect Password";
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
    <title>Car Rental Portal | Admin Login</title>
    <!--    --><?php
    //    include_once "header.php"
    //    ?>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<div class="container" align="center">
    <div class="login-page">
        <div class="form-content">
            <div class="container" style="margin-top: 10%">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card" style="background-color:rgba(0,0,0,0.7); border-radius: 3%;">
                        <h1 class="text-center text-light text-bold  mt-4x" style="margin-top:5%;">Admin Login </h1> <br>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2" style="margin-left: 8%;margin-right: 4%">
                                <form method="post" id="login" style="text-align:left;">
                                    <label for="username" class="text-uppercase text-white text-sm"
                                           style="margin-top: 2%;">Username</label>
                                    <input type="text" placeholder="Username" name="username" id="username"
                                           class="form-control mb">
                                    <?php
                                    if ($usernameError != '') {
                                        echo "<label class='error' style='color: red;'>$usernameError</label>";
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