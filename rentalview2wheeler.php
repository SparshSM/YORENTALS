<?php
session_start();
?>

<?php
include_once "header.php"
?>
<?php
include_once "adminsidebar.php"
?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Records</title>
</head>
<link rel="stylesheet" href="view.css">
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

<style>
    #font {
        font-family: Acme;
    }
</style>
<body>
<div class="container" id="font"><br>
    <h1 class="text-center">TWO WHEELERS</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>COMPANY</th>
            <th>MODEL</th>
            <th>COLOR</th>
            <th>CONDITION</th>
            <th>DESCRIPTION</th>
            <th>REG_NO</th>
            <th>RENT</th>
            <th class="text-center" colspan="2">CONTROLS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $rentaltwowheelers = "select * from rentaltwowheelers";
        $result = mysqli_query($con, $rentaltwowheelers);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
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

