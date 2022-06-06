<?php
//include_once "publicheader.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>

</head>

<body>

<?php
//include_once "nav.php"
?>
<!--<div class="container pop">-->
    <div class="modal" id="rentalform">
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
                                <form class="registerrental" id="signuprental" action="rentalsignupcon.php"
                                      method="post" enctype="multipart/form-data">
                                    <div class="form-group form-row">
                                        <h1 class='col-12 text-center h1'>RENTAL SIGNUP
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
                                        <label for="pass" class="col-3">Password</label>
                                        <div class="col-9">
                                            <input type="password" data-rule-required="true" minlength="8" name="pass"
                                                   id="pass"
                                                   class="form-control"> <br>
                                        </div>
                                        <label for="aadhar" class="col-3">Aadhar Number</label>
                                        <div class="col-9">
                                            <input type="text" data-rule-required="true"
                                                   name="aadhar" id="aadhar"
                                                   class="form-control">
                                        </div>
                                        <label for="address" class="col-3">Address</label>
                                        <div class="col-9">
                                            <input type="text" data-rule-required="true" name="address" id="address"
                                                   class="form-control">
                                        </div>
                                        <div class="col-12 text-center" style="margin-top: 15px;">
                                            <input type="submit" value="SignUp" class="btn btn-danger"
                                                   style="width: 80%">
                                        </div>
                                        <div class="col-12 text-center" id="fp1">
                                            <span style="margin-top: 15px;">Already a Renatal?</span> <label><a href="rentaldashboard.php" target="_blank"
                                                                                                                style="margin-top: 15px;">Login
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
    $('.msg1 a').click(function () {
        $('.forgotrental').slideToggle({height: "toggle", opacity: "toggle"}, "fast");
    });
    var card = document.getElementById("card");

    function openrentalsignup() {
        card.style.transform = "rotateY(-180deg)";
    }

    function openrentlogin() {

    }

    $(document).ready(function () {
        <?php
        if($isshowrentmodal){
        ?>
        $('#rentalform').modal('show');
        <?php
        }
        ?>
    })
</script>
<script>
    $(document).ready(function () {
            $('#signuprental').validate();
        }
    )
</script>
<script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    function showrentmodals() {
        $('#rentalform').modal('show')
        card.style.transform = "rotateY(0deg)";
    }
</script>
</body>
</html>