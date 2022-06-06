<?php
include_once "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactus</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap')
    </style>
    <?php
    include_once "publicheader.php"
    ?>
</head>
<body style="background-color: gray">
<?php
if (isset($_SESSION['user_username'])) {
    include_once "usernav.php";
} else {
    include_once "nav.php";
}
?>
<!--<div  style=" position: relative;  text-align: center; width: 100%" >-->
<img src="contactus2.jpg" alt="image is loading" width="100%">
<!--</div>-->
<div style="background-color:#cee5ff;color: black !important; font-family:'Engravers MT';">
    <div class="container row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h1 class="text-center mb-5">
                <ins><br>For any queries</ins>
            </h1>
            <form action="contactuscon.php" METHOD="post">
                <div class="form-group  form-row">
                    <label for="name" class="col-sm-2" style="margin-right:10%;">
                        <h2>
                            <ins>Name</ins>
                        </h2>
                    </label>
                    <div class="col-md-10">
                        <input type="text" width="80%" required name="name" id="name" placeholder="Enter Name"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="mobile" class="col-sm-4 "
                           style="margin-right:10%;">
                        <h3>
                            <ins>Mobile No</ins>
                        </h3>
                    </label>
                    <div class="col-md-10">
                        <input type="number" required name="mobile" id="mobile" width="80%"
                               placeholder="Enter Mobile No" class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="email" class="col-sm-2 " style="margin-right:10%;">
                        <h2>
                            <ins>Email</ins>
                        </h2>
                    </label>
                    <div class="col-md-10 ">
                        <input type="email" required name="email" id="email" placeholder="Enter Email Address"
                               class="form-control bg-light">
                    </div>
                </div>
                <div class="form-group form-row">
                    <label for="message" class="col-sm-2 "
                           style="margin-right:10%;">
                        <h2>
                            <ins>Message</ins>
                        </h2>
                    </label>
                    <div class="col-md-10">
                        <textarea required name="message" id="message" placeholder="Write your query here"
                                  class="form-control bg-light"></textarea>
                    </div>
                </div>
                <div class="form-group form-row">
                    <div class="col-sm-8 offset-sm-4">
                        <input type="submit" value="Send" class="btn btn-dark align-self-xl-end"
                               style="width: 100px; height: 45px ">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
        <!--    <div style="display: grid">-->
        <div class="col-md-5 col-sm-4 " style="margin-top:5% !important;">
            <h4><i class="fa fa-map-marker-alt"></i>Address: YO RENTALS, B K DUTT GATE, AMRITSAR.</h4>
            <p><i class="fa fa-phone"></i>Contact: 9872593773,<br>9876466448,<br>7717442429</p>
            <h3><i class="fa fa-mail-bulk"></i>Email: info@yorentals.in</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d849.343563744661!2d74.8684041292016!3d31.623601798833512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197b788fb513dd%3A0xdbfc115490da0c84!2sYO%20RENTALS!5e0!3m2!1sen!2sin!4v1628509590300!5m2!1sen!2sin"
                    width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
</div>
</div>
</body>
<?php
include_once "footer.php"
?>
</html>