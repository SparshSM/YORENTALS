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
    <title>View Cities</title>

    <?php
//    include_once "header.php";
    ?>
    <?php
//    include_once "adminsidebar.php";
    ?>
    <link rel="stylesheet" href="view.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style>
        #font{
            font-family: Acme;
        }
    </style>
</head>
<body>
<div class="container" id="font">
    <h2 class="text-center">View Cities</h2>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Sr No</th>
            <th>NAME</th>
            <th>MOBILE</th>
            <th>EMAIL</th>
            <th>QUESTION</th>
            <th>ANSWER</th>

<!--            <th class="text-center" colspan="2">Controls</th>-->
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $selectcities = "select * from contactus";
        $result = mysqli_query($con, $selectcities);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>

            </tr>
            <?php
            $srno++;
        }


        ?>

        </tbody>
    </table>
</div>

</body>
    </html><?php