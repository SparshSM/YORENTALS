<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>About Us</title>
    <?php
    include_once "publicheader.php"
    ?>
</head>
<body style="background-color:#9f1313 !important; color: white">
<?php
if (isset($_SESSION['user_username'])) {
    include_once "usernav.php";
} else {
    include_once "nav.php";
}
?>
<div style=" position: relative;
  text-align: center;">
    <img src="aboutus2.jpg" alt="image is loading" width="100%">
</div>
<div class="container-fluid" id="justify">
    <h1 style="font-family: 'Times New Roman',sans-serif" align="middle"><br>Company Profile</h1><hr>
    <p>
        YO RENTALS has been helping customers enjoy unforgettable road travel experiences since 2021. YO RENTALS fleet
        of quality cars and bikes and exceptional team have helped thousands of customers
        explore Punjab, Hyderabad, Maharashtra and Gujarat. <br>
        In 2021 we expanded our service offering and providing YO RENTALS guests with the opportunity to rent a vehicle at
        numerous convenient locations across India. Let us show you how easy and affordable a holiday in India can be
        with YO RENTALS. <br>
        In 2021 YO RENTALS was founded by Paras ,Rahul and Sparsh. YO RENTALS is still led by majority shareholders
        Rahul,Sparsh and Paras and management is both financially and personally invested in the business.
        Whether you are traveling for business or pleasure, our ultimate goal is al-ways to save you both time and money
        so that you can focus on the more important things- like planning the fun side of your trip!
    </p>
    <h2 style="font-family: 'Times New Roman'" align="left">
        Misson and Strategy
    </h2><hr>
    <p>
        Our mission is to be recognised as the global leader in Car and Bike Rental for companies and the public and private
        sector by partnering with our clients to provide the best and most efficient Car and Bike Rental solutions and to achieve
        service excellence.The strategy of YO RENTALS is to develop a global approach across the corporation where appropriate to
        facilitate local businesses to flourish.
    </p>
    <hr>
    <h3 style="font-family: 'Times New Roman'" align="left">
        Our corporate strategic goals are to:

    </h3>
    <p>
        . Maintain an independent position.<br>
        . Optimise global presence.<br>
        . Be a responsible company.<br>
        . Create a well recognised and preferred international brand.
    </p>
    <hr>
    <h3 style="font-family: 'Times New Roman'" align="left">
        Our key local strategic objectives are to:

    </h3>
    <p>
        . Establish leading positions in the cities we operate.<br>
        . Create value for money.<br>
        . Provide valuable solutions to their needs.<br>
        . Make it easier for our clients.<br>
        . Deliver superior service that exceeds their expectations.<br>
        . Become a loyalty leader.
    </p>
    <hr>
    <h2 style="font-family: 'Times New Roman'" align="left">
        Our Values

    </h2>
    <p>
        The YO RENTALS values identify us as a company. They give direction to the way we act in our daily work and how
        we behave towards each other, our clients and suppliers. They are embraced by all our employees across the
        entire YO RENTALS community, joining cultures, customs and languages. It is our values that drive our customer
        centric behavior, combined with our industry leading fleet management solutions. <br>
        We take personal ownership of our actions, our clients can count on us to deliver what we promise. We want our
        clients to feel satisfied working with us and we proactively look for ways to keep them pleased.


    </p>
    <hr>
    <h2 style="font-family: 'Times New Roman'" align="left">
        Expertise

    </h2>
    <p>
        Our long experience and global presence have given us extensive knowledge on fleet and vehicle management. We
        share this knowledge in a simple and understandable way. We listen to our clients and use our know-how to
        pro-actively offer them the solutions that best fit their needs.
    </p>
    <hr>
    <h2 style="font-family: 'Times New Roman'" align="left">
        Passion
    </h2>
    <p>
        We are proud of our company and of the clients we work for and we show this in all of our communication and
        actions. We inspire and motivate the people around us by putting our hearts, minds and souls in all of our
        dealings and by showing our clients that we believe in what we stand for and that we care.
    </p>
    </div>
</body>
<?php
include_once "footer.php"
?>
</html>