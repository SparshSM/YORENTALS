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
    <h1 class="text-center">Rentals</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>MOBILE</th>
            <th>EMAIL</th>
            <th>AADHAR NUMBER</th>
            <th>ADDRESS</th>
            <th>STATUS</th>
            <th class="text-center" colspan="2">CONTROLS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $rentals = "select * from rentals";
        $result = mysqli_query($con, $rentals);
        while ($row = mysqli_fetch_array($result)) {
            $currentStatus = 'Pending';
            if ($row[6] == 1) {
                $currentStatus = 'Accepted';
            }
            if ($row[6] == 2) {
                $currentStatus = 'Rejected';
            }
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
<!--                <td>--><?php //echo $row[6]; ?><!--</td>-->
                <td><?php echo $currentStatus; ?></td>
<td>
                    <?php
                    if ($currentStatus == "Pending") {
                        ?>
                        <form onsubmit="return confirm('Are you Sure to Accept the Request ?')"
                              action="approvereq.php"
                              method="post">
                            <input type="hidden" name="action" value="accept">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" id="id">
                            <button type="submit" name="accept" class="btn btn-success">
                                <i class='fas fa-thumbs-up'></i> Accept
                            </button>

                        </form>
                        <form onsubmit="return confirm('Are you Sure to Reject the Request ?')"
                              action="approvereq.php"
                              method="post">
                            <input type="hidden" name="action" value="reject">
                            <input type="hidden" name="id" value="<?php  echo $row['id']; ?>" id="id">
                            <button type="submit" name="rejected" class="btn btn-danger">
                                <i class='fas fa-trash-alt'></i> Reject
                            </button>

                        </form>
                        <?php
                    } else if ($currentStatus == "Accepted") {
                        ?>
                        <form onsubmit="return confirm('Are you Sure to Reject the Request ?')"
                              action="approvereq.php"
                              method="post">
                            <input type="hidden" name="action" value="reject">
                            <input type="hidden" name="id" value="<?php  echo $row['id']; ?>" id="id">
                            <button type="submit" name="rejected" class="btn btn-danger">
                                <i class='fas fa-trash-alt'></i> Reject
                            </button>

                        </form>
                        <?php

                    } else if ($currentStatus == "Rejected") {
                        ?>
                        <form
                            action="approvereq.php"
                            method="post">
                            <input type="hidden" name="action" value="accept">
                            <input type="hidden" name="id" value="<?php  echo $row['id'];?>" id="id">
                            <button type="submit" name="accept" class="btn btn-success">
                                <i class='fas fa-thumbs-up'></i> Accept
                            </button>

                        </form>
                        <?php

                    }


                    ?>


                </td>
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


