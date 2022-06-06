<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include_once "publicheader.php";
include_once "usernav.php";
//include_once "rentalsidebar.php";
?>

<?php
$booking_id = $_GET['booking_id'];
?>

<div class="container" style="border: 1px solid #000 !important;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table table-bordered">
                <tr>
                    <th>Booking ID</th>
                    <th>Car Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Days</th>
                    <th>Rent</th>
                    <th>Total Price</th>
                </tr>
                <?php
                include "connection.php";

                $mycar_id = '';
                $startdate = '';
                $enddate = '';
                $numberofdays = '';
                $useremail = '';

                $select_booking = "select * from booking WHERE booking_id=$booking_id ORDER BY booking_id DESC";
                $res_booking = mysqli_query($con, $select_booking);
                while ($bookingRow = mysqli_fetch_array($res_booking)) {
                    ?>
                    <tr>
                        <td><?php echo $bookingRow['booking_id']; ?></td>

                        <td>
                            <?php
                            $Carid = $bookingRow['mycar_id'];

                            $select_Car = "select * from rentalcars WHERE id=$Carid";
                            $result_Car = mysqli_query($con, $select_Car);
                            $row_Car = mysqli_fetch_assoc($result_Car);

                            $carname = $row_Car['car_name'];
                            $rent = $row_Car['rent'];

                            echo $carname;
                            ?>
                        </td>

                        <td><?php echo $bookingRow['start_date'] ?></td>
                        <td><?php echo $bookingRow['end_date'] ?></td>

                        <td>
                            <!-- Calculating Days-->
                            <?php
                            $start_date = strtotime($bookingRow['start_date']);
                            $end_date = strtotime($bookingRow['end_date']);

                            $daysleft = $end_date - $start_date;
                            $finaldaysleft = floor($daysleft / (60 * 60 * 24));

                            echo $finaldaysleft;
                            ?>
                            <!-- //Calculating Days End-->
                        </td>

                        <td>&#8377; <?php echo $rent; ?></td>

                        <td>&#8377;
                            <?php
                            $totalrent = $rent * $finaldaysleft;
                            echo $totalrent;
                            ?>
                        </td>
                    </tr>

                    <?php
                    $mycar_id = $bookingRow[4];
                    $startdate = $bookingRow['start_date'];
                    $enddate = $bookingRow['end_date'];
                    $numberofdays = $finaldaysleft;
                    $useremail = $bookingRow[1];
                }
                ?>
                <tr>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td rowspan="2"></td>
                    <td>GST @ 12%</td>
                    <td><?php echo($totalrent * 12 / 100); ?> </td>
                </tr>
                <tr>
                    <td><strong>Grand Total</strong></td>
                    <td><?php $grandtotal = (($totalrent * 12 / 100) + $totalrent);
                        echo $grandtotal; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10"></div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <div class="form-group">
                <input type="hidden" id="bookingid" value="<?php echo $booking_id; ?>">
                <input type="hidden" id="useremail" value="<?php echo $useremail; ?>">
                <input type="hidden" id="numberofdays" value="<?php echo $numberofdays; ?>">
                <input type="hidden" id="startdate" value="<?php echo $startdate; ?>">
                <input type="hidden" id="enddate" value="<?php echo $enddate; ?>">
                <input type="hidden" id="mycar_id" value="<?php echo $mycar_id; ?>">
                <input type="hidden" id="grandtotal" value="<?php echo $grandtotal; ?>">

                <input type="button" class="btn btn-success" value="Pay" id="rzp-button1">
            </div>
        </div>
    </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(document).ready(function () {
        $("#rzp-button1").click(function () {
//            alert();

            var bookingid = document.getElementById('bookingid').value;
            var amount = document.getElementById('grandtotal').value * 100;
            var mycar_id = document.getElementById('mycar_id').value;
            var startdate = document.getElementById('startdate').value;
            var enddate = document.getElementById('enddate').value;
            var numberofdays = document.getElementById('numberofdays').value;
            var useremail = document.getElementById('useremail').value;

//            alert("insert_payment.php?status=success&total=" + amount)
            var options = {
                "key": "rzp_test_dRWiKHS7zr2Gki",
                "amount": amount,
                "name": "Zoom Car",
                "description": "ACET",
                "image": "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDxAPEBEQEA0PEBAQDg8ODw8NDQ0NFhIWFhURFRMYHSggGBolGxUTITEhJSk3Li4uFx8zOD8sNygtLisBCgoKDg0OGxAQGi0lHyYtLS0uLS0tLS0tLS0tKy0rLS0tLS0tLSstKy0rLS0rLS0tLS0rLSstLS0tLS0rLTctLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcEBQECAwj/xAA2EAACAQICBwYEBQUBAAAAAAAAAQIDBAURBhIWITFBkQcTIlFScRRUYZIVMlOBsSNCYnKhwf/EABsBAQADAQEBAQAAAAAAAAAAAAABBAUDAgYH/8QAKhEBAAICAQMEAQMFAQAAAAAAAAECAxEEEhNRBRQhMUEVFlJCU4GRsaH/2gAMAwEAAhEDEQA/ALxAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB43lxGjTnUk8owi5P9iYjc6JnSv8AQfTP4mvc06kuNRypZv8Asz4Fvk4OisTDjjvuZhYVGopLNFN2egAAAAAAAAAAAAAAAAAAAAAAAAAAAAACB9rOOfD2ncRf9Su8n5qHmXOHj6rdXhxzW1GlNYVeytq0akXk09/1XM0s1OukwrUtqdr+0SxNV6UXnnmkYUxqdL8JGQAAAAAAAAAAAAAAAAAAAAAAAAAAAAOJSyTb4JZv2A+ee0DGXe31SSedOm9SHlkjb4+PopClktuyNHdzWT2YYzl/Sk/yvd7GTzMfTfflbw23C4KU9ZJlN2dwAAAAAAAAAAAAAAAAAAAAAAAAAAARftDxpWVjUaeVSqtSHnv4sscbH13hzyW1V8+SebbfF737m0pOANjo/fO3uITzyWeT9ivycfXR0xW1Z9CaPXqrUovPkjFXW3AAAAAAAAAAAAAAAAAAAAAAAAAAABRnaxjfxN33MXnToLV3cHPma/Dx9NNz+VTNbc6QYtuIAAt3syxrXpqDe+O5mJycfRddx23VZsHmjg6OwAAAAAAAAAAAAAAAAAAAAAAAAA1OlOKxsbSrXfGMWo/Wb3I6Yqdd4h5vOo2+brqu6s5VJb5Tk5N/Vm7EajSjMvIlAAA3+huJu2uY7/DN5P3KfMx9Verw7YbanS/8KuVUpp/QyVtnAAAAAAAAAAAAAAAAAAAAAAAAACou2XGtadO0i90PFUy9XkzS4OPUdUq2e34VgaCuAAAHMJOLTXFPNETG40mJ0u/s8xjvqMU3vyyfuYWWnRaYXqzuNp2mc3pyAAAAAAAAAAAAAAAAAAAAAAAxcTvI29GpWm8o04uTPVa9UxEImdRt81Y1iEru4q1pPNzk3+2e43qVitYhQtO52wj0gAAAAEu7PMW7iv3bfhlvXuZ/Ox/1wsYbfhe1lWU4J/QzVlkAAAAAAAAAAAAAAAAAAAAAAAK47Ycb7qhC1i/HV8U8vR5F7hY926nDNb40ppGoqgAAAAAetpXdKpGa4xaZ4yU66zD1WdTtfuhWKKvRi8+SMG1emdSvRO4SpEJAAAAAAAAAAAAAAAAAAAAAdK1RQi5PdGKbb+iERsfOWmeMO+vKtXPwqTjBclFbjdwY+ikQo3tudtGdXgAAAAAABYHZljGpLuW+HD2Mrm49W6o/K1htuNLooT1oplJ3egAAAAAAAAAAAAAAAAAAAAMDHLN3FvUpKbhrrVco8Uj3S3TbaLRuNKUx/QxWzahKc/dFz31vDj2I8tB+CVfJ9B763g7EeT8Eq+l9B763g7EeT8Eq+l9B763g7EeXWpg9WKz1Xu+h7x83c6tDzbBqPhrmstxoQrgADNwe8dvWhNcms/Y48jH10mHvHbUvoPRm/ValF58kYa83gAAAAAAAAAAAAAAAAAAAAPKVaHDWXUDXXNhRqPNuPVAY/wCDW/8Ah/wB+DW/+H/AO0cDoPhqv2yAVdHaTT8K6AUlp3grsbuUUsqc/FA2eLk66KeWurI4WXIAAWp2YY1nFU5PfHd+xjcrH0XXMVtwtaEs1mVnV2AAAAAAAAAAAAAAAAAAGLiVx3VOT55ZL3AiLm3vzYQ41mA1mA1mB3pV5QeabTQG+wrFVV8L/MuISjHatgnxFt30V46Xi+riWuJk6b68uWWu4UkbCmAANxoriLtrmDzyjJpMq8vH1U34dcVtS+gsFu1Vpxf0MdcbIAAAAAAAAAAAAAAAAAARzSC51pqC4R4+4GoAAAAADwjWdGtGa/LLdL3AmNSEbii4vepRaf7omJ18j540nwx2d1UpNblJuP1ibmHJ10iVG9dS1R1eADlPJ5rihMbSufs3xrvaUYt71uZhZ6dF5hdpbcbWGmcntyAAAAAAAAAAAAAAAA8rqsqcJSfJAQ2tUc5OT4tgdAAAAACHjdUteLXPivcDe6LXuvBRfFbmEob2v4JnGN1Fb4+Gb+nIv8LJqelwzV3G1UGmqgACT6B4q7e4UW8ozf8A0o83HuOqHfDb50vvD66qQT+hlrTKAAAAAAAAAAAAAAAAaPSK5ySpp8d7A0IQBIENLpFjqs4pJa1aX5Y+S82Eo/b4pf1t8XknyUQMrvsR9T+1AFWxHzf2oCVaIxrKWc883x5AS7GLCN1QlTms4yWTRNbTWdwiY38KdxzQp05vu4vIse7yeXPtVanZWt5PoT7vJ5OzU2VreT6D3eTydmrIsdGasakZar3NM825WSY1KYxVhcei+sqaUvIrujfgAAAAAAAAAAAAAAdaklFNvglmBDr2v3lSUvN7vYIeASBDpWqKEXJ7lFZv2AglnSliN3Ko/wAutlFeUQlZdG1tbClGVdxgnuWfNnm14r9u+Dj5M06pGzaDDP1I9Dx3qeVn9L5X8XG0GGfqR6DvU8p/SuV/F72+kmHJpRqxTbyXLeO9TyifTOTEb6UkhNSSaeafD2OrPmNfDWYxWt7eOvXajFvLNrmebWivzLtg4981umkblqPx/DP1Y9Dx3qeVr9L5P8T8fwz9WPQd6nk/S+T/ABNoMM/Vj0Hep5P0vk/xbPCcbtK8nCjUjKSWeXDceq5K2+Icc3CzYY6r11DcpntVcgAAAAAAAAAAAAA1ePXOpT1Vxl/AEZCAJAI3plfalNUY/nq8f9QNzoDg+rFSaAjfaPjPxNz3UX/SoeFfWXMzuRfqtp9t6LxOzh6p+5RErtkABC1dA9I3WhGnN+KGUd/M08F+qr4T1bjdjPOvqflJ9KrBXdnUhlm9XWj9JI95KdVdK/C5E4M0XULVg4ScXxi2n7mVMafoVbRaImHUh6AM3BsQla1oVYvenv8Aqjpjt02iVTm4Iz4bUXdo7iquaalnxSNSJ2/Pb1mtprLeEvIAAAAAAAAAAAOGwIni1z3tV+S3IDCCAJdak1FNvcks37BCDWylf3rnxipZR8kkErHxW8jhlhKfCbjqwXPWZzy36a7XvTuNPIzxX8flTFWo5ycnvcm235sy5nb7+tYrGodSEgADaaOXzt68Xnkm8mWOPfVtMb1ri93D1x9wvHC7hVqS55o0XxSoe0DCfhrpySyhU8S8s+ZncinTbb7X0Xld3D0T9wjBXbIAAnnZ1i2q+6b4cPY0ePfqrp8X61xe1m64+pWxSnrJMsMV3AAAAAAAAAAAGFi1x3dJvm9yAiTAAAI/phiHdUe6i/6lV5buUeYGf2f4PklJoDN7QsEr3ThqyiqFOO6PNy8yvmxWvPw2/S+fh4tZ6o+ZVbd2k6UtXLPLyOHtbNX9fw+JeGpL0se1sfr+HxJqS9LHtbH7gw+JNSXpY9rY/cGHxLmEJ5rwtCONaEW9dwWiYmsrf0EvJOnGMuKSL0b18vk8s1m8zX6e/aLhHxNq5RWc6fiX/pyz06qtD0nk9jkRv6n4UwZj7sAAZuDXboVoT4LNJ+x2wX6bMz1bjd7jzr7j5Xpo/eKrSi8+RpvhG2AAAAAAAAAAAEYx6516mquEf5A1gADhsCDzUr6+eaerB6sU/JAW7gFkqNOKy5AZl7bKqsmBH62iVObzaQHTY6l5IBsdS8kA2OpeSAbH0vJAbXDMHjQ4IDZXNFTg4vg1k/YJidfKhtK8MdpdVIZeFtyj/qzLzU6bPvfTOT38ET+Y+Jac5NAAAmNrO7OsX1oqDe9bjUw36qvgvU+N2M8x+J+lkReaOrOcgAAAAAAAAPC9r93CUvJbvcCHVJazbfFvMIdQkAAeULaEZayilJ80t4QzFeVFwlLqA+NqeuXUDn42p65dQHxtT1y6gPjanrl1A4+NqeuXUB8bU9cuoHtb4pUg/wAza5p7wlv7HEI1l9fICFdqWD69JV4rxU+OXOJW5NN123fQ+V28vbn6lVZnvsQABuNF790LiO/dJ5fuWeNfVtMP1zi9zF3I+4/4vLCrlVKaf0NB8azQAAAAAAAAGg0iud6prlvYGkAAAAAAAAAAAAAAA62t06FeO/wT/kCV3tCNzQlF71KLT/dETG4090vNLRaPwoXF7J21epSay1ZPL25GVkr020/Q+JnjNireGGeFgA5i8mmuK3kxOp283pF6zWfyt7QHFu9pRTe9LJmrS3VXb885eGcOWaSm6Pas5AAAAAAB0rVFCLk+CWYENuarqTlJ82EPIJAAAAAAAAAAAAAAY95T1o7uK3oCS6NXve00nxyyAg3alg+rONzFbn4Z5efJlPlU/qfT+gcr7wz/AIV8Un04AAkuhGJdzW1W90nu9y5xb/0vmfX+L9Zo/wArqs62vBP6F18uyAAAAAAAYmJUtem45tewFdY3idS2k1Cmp5c5Nr+ANRtPc/LQ+6YDae5+Wh90gG09z8tD7pANp7n5aH3TAbT3Py0PukA2nuflofdIBtPc/LQ+6QDae5+Wh90gG09z8tD7pANp7n5aH3SAbT3Py0PukA2nuflofdIBtPc/LQ+6QBaT3Py0PukBJtDrycptuOprPPVXBASrSHDY3dvKnL+5ceafmebVi0al24+a2HJGSv4UxjGj1S2k4xzmvNrIre0jy3v3Fk/tx/61nwVb0fyPaR5P3Fk/tx/uT4Kt6P5HtI8n7iyf24/3LIw+zqqpGWq1k89x6pxorO9uHJ9btnxTjmkfK69F6spUlreRZYTfAAAAAAA6zjmsgNbcYLTqPNpAeOztH0roA2do+ldAGztH0roA2do+ldAGztH0roA2do+ldAGztH0roA2do+ldAGztH0roA2do+ldAGztH0roA2do+ldAGztH0roBxs7R9K6AZVrhUKX5UgM/V3ZAa+6winVebSAxtnaPpXQDnZ2j6V0ALR6kv7V0A2VtaxprJAZAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//2Q==",
                "handler": function (response) {
                    //alert(response.razorpay_payment_id);
                    if (response.razorpay_payment_id == "") {
                        alert('Failed');
                        // window.location.href = "checkfees.php?status=failed";
                    }
                    else {
                        //alert('Success');
                        window.location.href = "insert_payment.php?status=success&grandtotal=" + amount +
                            "&mycar_id=" + mycar_id + "&startdate=" + startdate + "&enddate=" + enddate +
                            "&numberofdays=" + numberofdays + "&useremail=" + useremail+"&bookingid="+bookingid;
                    }
                },
                "prefill": {
                   // "name": "karan",
//                    "email": "abc@gmail.com"
                    "name": "",
                    "email": ""
                    // "email": useremail
                },
                "notes": {
                    "address": ""
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    });
</script>

</body>
</html>