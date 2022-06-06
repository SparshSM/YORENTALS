<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQ</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"-->
    <style>
        #color{
            background-color: #f8f7f7;
            font-family: "Times New Roman";
        }
        table tr td {
            border: 1px black outset;
            padding: 5px 0 0 5px;
        }
        /*table{*/
        /*    background-image: url(FAQ.jpg);*/
        /*    background-attachment: scroll;*/
        /*    !*background-repeat: no-repeat;*!*/

        /*}*/

    </style>
    <?php
    include_once "publicheader.php"
    ?>

</head>
<body >
<?php
if (isset($_SESSION['user_username'])) {
    include_once "usernav.php";
} else {
    include_once "nav.php";
}
?>
<div style="width: 100%">
    <img src="FAQ.jpg"  alt="image is loading" width="100%">
</div>

<h1 align="center" style="font-family: Algerian">Frequently Asked Questions</h1>
<table border="1" width="100%" cellpadding="10" cellspacing="5" id="color">
    <tr>
        <td><h3>
                1. For how long can I subscribe a car?
            </h3>
            <h3>
                ANS.   You can subscribe to a car for 1, 2, 3, 6, 12 or 24 months depending on your need. The longer you subscribe, the lesser is your monthly Subscription Fee.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                2.  Which cars can I subscribe to? What are the variants?
            </h3>
            <h3>
                ANS.  Yo rentals Subscription currently offers multiple car models in all Yo rentals cities. Check the car variants available in your city
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                3. Can I buy the car I have subscribed to?
            </h3>
            <h3>
                ANS.  While we would have loved to give you the option if you wanted, our arrangement with OEMs and financiers would make this a very expensive option for you. You can always subscribe to a car though :)
                . Do remember subscribing is always better than buying!
                . If this still doesn’t make you happy, just drop us a note and we will make a way for you to own the car
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                4. Do I get to chose the color of the car as well?
            </h3>
            <h3>
                ANS. Unfortunately, No. :( We know you want your car as soon as possible, hence, we have limited control over the color of the car.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                5. Will the car have black-board registration?
            </h3>
            <h3>
                ANS.  The car would be registered under Yo rentals Self Drive Car Rental license making it a black board car.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                6. Will the cars be fitted with speed governors?
            </h3>
            <h3>
                ANS. The car would be registered under Yo rentals Self Drive Car Rental license, which makes it commercial in nature. As per government regulations, all the commercial cars need to be fitted with speed governors. So yes, your car comes with a speed governor installed that limits your speed to 80 km/h. Do remember that this is for your own safety :)
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                7. Can I extend my tenure?
            </h3>
            <h3>
                ANS.  Tenure can be extended anytime during the subscription period. Given the huge demand for this product, we suggest you do this at least a month before the scheduled end date of the subscription as the extension is subject to availability of the car.
                . Do note that extension will be done at the prevailing subscription fee at the time of extension. Hence, we suggest you subscribe for longer tenures or extend way in advance.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                8.  How will I handle accidents when I am driving?
            </h3>
            <h3>
                ANS. We wish you drive safe and never have to go through this! However, in that unfortunate event, just call our AEC Support [contact details will be available in the Yo rentals Subcription App] and we will take it from there.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                9. How will Yo rentals handle accidents done by the customers?
            </h3>
            <h3>
                ANS.  In event of any accident caused by Yo rentals customer, Yo rentals will take care of the operation related issue and the cost of repair. Having said that, we do understand the inconvenience caused to you because the car wouldn’t be available to you for some time. To make up for it, we will waive off the subscription fee for the period the car is in the workshop [on pro-rata basis] provided the car is in the workshop for more than 48 hours.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                10.  What is the monthly limit on KM usage?
            </h3>
            <h3>
                ANS.  We have a fair usage policy for the total distance run during the program. This is typical of any leasing arrangement. Don’t worry though, as we give you an average 150 km per day during the subscription (this only covers the personal use of the car; there is no limit on the distance run when the car is on a booking after you have listed the car). Do note that in case the user drives for extra kilometers beyond the specified limit, Yo rentals, at its discretion, may terminate the subscription.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                11. What is the termination policy for the subscription program?
            </h3>
            <h3>
                ANS.   Yo rentals Subscription is a purely no strings attached program. All you need to do is email or call us about your intent of termination. However, your last day of the subscription will depend upon the below-mentioned criteria:
                . If the termination request is given before 10th then the last day of the same month will be your last subscription day
                . If the termination request is given after 10th then the last day of the subsequent month will be your last subscription day
                . If the user wants to terminate prematurely, then the user will have to give a notice period of 1 month before termination. Do note that, there is a lock-in for every subscription. This means that if a user terminates the agreement prematurely, there will be a foreclosure penalty which would be equal to the one-month applicable subscription fee and rental difference.
                .That said, we are sure this question would become irrelevant for you as you would never want to terminate before the scheduled date.
            </h3>
        </td>
    </tr>
    <tr>
        <td>
            <h3>
                12. When do I need to pay the monthly subscription fee?
            </h3>
            <h3>
                ANS. The subscription fee needs to be paid in advance. The invoice will be generated in the first week of every month and you need to make the payment within 5 days of raising the invoice (i.e invoice is generated on 3rd of the month, then payment need to be made by 8th of the month). There is a late payment fee of 300 per day in case the payment is made after the due date. Make sure you pay on time - No one likes penalties except in Football.
            </h3>
        </td>
    </tr>
</table>


</body>
<?php
include_once "footer.php"
?>
</html>