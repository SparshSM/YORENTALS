<?php
session_start();
    include_once "header.php";
    ?>
    <?php
    include_once "adminsidebar.php";
    ?>
    <link rel="stylesheet" href="view.css">
<link rel="stylesheet" href="add&view.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style>
        #font{
            font-family: Acme;
        }
    </style>
<div class="container" id="font">
    <h2 class="text-center">View Registered Users</h2>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Sr No</th>
            <th>NAME</th>
            <th>MOBILE NO</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
<!--            <th class="text-center" colspan="2">Controls</th>-->
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $users = "select * from signup";
        $result = mysqli_query($con, $users);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>

            </tr>
            <?php
            $srno++;
        }
        ?>

        </tbody>
    </table>
</div>