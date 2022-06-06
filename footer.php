<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" style="padding-top: 10px;">
                <h6>Quick Links</h6>
                <ul id="qlinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.php">About Us</a></li>
                    <li><a href="FAQ.php">FAQs</a></li>
                    <li><a href="locations.php">Locations</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6>Subscribe Newsletter</h6>
                <div class="newsletter-form">
                    <form method="post">
                        <div class="form-group">
                            <label>
                                <input type="email" name="subscrriberemail" class="form-control newsletter-input"
                                       required placeholder="Enter Email Address">
                            </label>
                        </div>
                        <button type="submit" name="emailsubscribe" class="btn btn-warning">Subscribe <span
                                    class="angle_arrow"><i class="fa fa-angle-right"></i></span></button>
                    </form>
                    <p class="subscribed-text">We send great deals and latest auto news to our subscribed users every
                        week.</p>
                </div>
            </div>
            <div class="col-md-2" style="padding-top: 10px;">
                <h6>Connect with Us:</h6>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i> Facebook/YO RENTALS</a>
                    </li>
                    <li><a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i> Twitter/YO_RENTALS21</a>
                    </li>
                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i> Linkedin/YO RENTALS</a></li>
                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram/YO_RENTALS</a></li>
                </ul>
            </div>
            <div class="col-md-3" style="padding-top: 10px;">
                <h4>Address: YO RENTALS, 998, B K DUTT GATE, AMRITSAR.</h4>
                <p>9872593773</p>
                <p>9876466448</p>
                <p>7717442429</p>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d849.343563744661!2d74.8684041292016!3d31.623601798833512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197b788fb513dd%3A0xdbfc115490da0c84!2sYO%20RENTALS!5e0!3m2!1sen!2sin!4v1628509590300!5m2!1sen!2sin"
                            width="100%" height="70%" style="border:0;" loading="lazy"></iframe>
                </div>
            </div>
            <img src="logo.jpeg" class="ml-3" width="250" alt="">
        </div>
    </div>
    <div class="col-md-6 col-md-pull-6">
        <p class="copy-right">Copyright &copy; 2021 YO Rentals Portal. All Rights Reserved</p>
    </div>
</div>
<script>
    function showModals() {

        <?php
        if(!isset($_SESSION['user_username'])){
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
//include_once "rentallogin_signup.php"

include_once "rentallogin_signup.php";
?>