<?php
if(!isset($_SESSION)) {
    session_start();
}

//session_start();

$username = $password = $usernameError = $passwordError = "";
$isShowModal = false;

if (isset($_POST['login'])) {
    $username = $_POST['Username'];
    $password = $_POST['password'];
    include_once "connection.php";

    $selectcmd = "select * from signup where username='$username'";
    $data = mysqli_query($con, $selectcmd);

    if (mysqli_num_rows($data) == 0) {
        $usernameError = "invalid Username";

    } else {
        $row = mysqli_fetch_assoc($data);
        if ($row['password'] == $password) {
            $_SESSION['user_username'] = $username;
            header("location:index.php");
        } else {
            $passwordError = "Incorrect Password";
        }
        $isShowModal = true;
    }
} ?>

<!--<div class="container pop">-->
    <div class="modal" id="regForm">
        <div class="modal-dialog">
            <!--            <div class="modal-content">-->
            <div class="modal-content" id="pop1">
                <div class="modal-body">
                    <div class="card">
                        <div class="inner-box" id="card">
                            <div class="card-front">
                                <label style="cursor: pointer; margin-top: -5px; margin-right: -40px;"
                                       class="close close-btn fas fa-times text-right"
                                       data-dismiss="modal"></label>
                                <form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="form-group form-row">
                                        <h1 class='col-12 text-center h1'>LOGIN
                                            <hr>
                                        </h1>
                                        <label for="Username" class="col-12">Username</label>
                                        <div class="col-12">
                                            <input type="text" required name="Username" value="<?php echo $username; ?>"
                                                   id="Username"
                                                   class="form-control"> <br>
                                            <?php
                                            if ($usernameError != '') {
                                                echo "<label class='error'>$usernameError</label>";
                                            }
                                            ?>
                                        </div>
                                        <label for="password" class="col-12">Password</label>
                                        <div class="col-12">
                                            <input type="password" required name="password" id="password"
                                                   class="form-control">
                                            <?php
                                            if ($passwordError != '') {
                                                echo "<label class='error'>$passwordError</label>";
                                            }
                                            ?>
                                        </div>
                                        <div class="col-12 fp" id="fp">
                                            <label class="message1">
                                                <a href="#">Forgot Password?</a>
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group form-row">
                                        <div class="col-12 text-center">
                                            <input type="submit" value="Login" name="login" class="btn btn-danger"
                                                   style="width: 80%">
                                        </div>
                                        <div class=" col-12 text-center sup">
                                            <span style="padding-top: 20px;">Not a User? </span> <label><a href="#"
                                                                                                           style="padding-top: 20px;"
                                                                                                           onclick="openRegister()">SignUp
                                                    Now</a> </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="forg" id="forg">
                                <div class="card rp">
                                    <label style="cursor: pointer;margin-top: -5px; margin-right: -40px;"
                                           class="close close-btn fas fa-times text-right"
                                           data-dismiss="modal"></label>
                                    <form>
                                        <div class="form-group form-row">
                                            <div class="row">
                                            </div>
                                            <h1 class='col-12 text-center h1' style="color: black">RESET PASSWORD
                                                <hr>
                                            </h1>
                                            <h2 class="text-center" style="color: black">Enter your email address
                                                <br> <BR></h2>

                                            <div class="form-group col-12">
                                                <input class="form-control" type="email" name="email"
                                                       placeholder="Enter email address" required> <br>
                                            </div>
                                            <div class="form-group col-6 offset-3">
                                                <input class="form-control button btn-danger" type="submit"
                                                       name="check-email"
                                                       onclick="" value="Continue">
                                            </div>
                                            <div class="modal-footer fixed-bottom message1">
                                                <label><a href="#"> Back to login</a> </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-back">
                                <label style="cursor: pointer; margin-top: -5px; margin-right: -40px;"
                                       class="close close-btn fas fa-times text-right"
                                       data-dismiss="modal"></label>
                                <form class="reg" id="signupform" action="Signupcon.php"
                                      method="post" enctype="multipart/form-data">
                                    <div class="form-group form-row">
                                        <h1 class='col-12 text-center h1'>SIGNUP
                                            <hr>
                                        </h1>
                                        <label for="name" class="col-3">Name</label>
                                        <div class="col-9">
                                            <input type="text" name="name" data-rule-required="true"
                                                   data-msg-required="Please Enter Name" id="name" class="form-control">
                                            <br></div>
                                        <label for="mobno" class="col-3">Mobile</label>
                                        <div class="col-9">
                                            <input type="text" name="mobno" data-rule-required="true"
                                                   data-rule-number="true" minlength="10" maxlength="10" id="mobno"
                                                   class="form-control">
                                            <br></div>
                                        <label for="email" class="col-3">Email</label>
                                        <div class="col-9">
                                            <input type="email" data-rule-required="true"
                                                   data-msg-required="Please Enter Email" name="email" id="email"
                                                   class="form-control">
                                            <br></div>
                                        <label for="Uname" class="col-3">Username</label>
                                        <div class="col-9">
                                            <input type="text" data-rule-required="true"
                                                   data-msg-required="Please Enter Username" name="Uname" id="Uname"
                                                   class="form-control">
                                            <br></div>
                                        <label for="pass" class="col-3">Password</label>
                                        <div class="col-9">
                                            <input type="password" data-rule-required="true" minlength="8" name="pass"
                                                   id="pass"
                                                   class="form-control"> <br>
                                        </div>
                                        <label for="confpass" class="col-3">Confirm Password</label>
                                        <div class="col-9">
                                            <input type="password" data-rule-required="true"
                                                   data-msg-equalto="Password & Confirm Password Not Match"
                                                   data-rule-equalto="#pass" name="confpass" id="confpass"
                                                   class="form-control">
                                        </div>
                                        <div class="col-12 text-center">
                                            <input type="submit" value="SignUp" class="btn btn-danger"
                                                   style="width: 80%">
                                        </div>
                                        <div class="col-12 text-center" id="fp1">
                                            <span style="margin-top: 10px;">Already a User?</span> <label><a href="#"
                                                                                                             style="margin-top: 10px;"
                                                                                                             onclick="openLogin()">Login
                                                    Now</a> </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
<script>
    $('.message1 a').click(function () {
        $('.forg').slideToggle({height: "toggle", opacity: "toggle"}, "fast");
    });

    var card = document.getElementById("card");

    function openRegister() {
        card.style.transform = "rotateY(-180deg)";
    }

    function openLogin() {
        card.style.transform = "rotateY(0deg)";

    }

    $(document).ready(function () {
        <?php
        if($isShowModal){
        ?>
        $('#regForm').modal('show');
        <?php
        }
        ?>
    })
</script>
<script>
    $(document).ready(function () {
            $('#signupform').validate();
        }
    )
</script>
<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    function showModals() {
        $('#regForm').modal('show')
        card.style.transform = "rotateY(0deg)";
    }
</script>
