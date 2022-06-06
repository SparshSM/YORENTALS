<?php
session_start();
?>
<?php
include_once "header.php";
?>

<?php
include_once "adminsidebar.php";
?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Records</title>
    <link rel="stylesheet" href="view.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style>
        #font{
            font-family: Acme;
        }
    </style>

</head>
<body>
<div class="container" id="font"><br>
    <h1 class="text-center">Customer Queries</h1> <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Message</th>
<!--            <th class="text-center" colspan="2">Controls</th>-->
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $selectquery = "select * from contactus";
        $result = mysqli_query($con, $selectquery);

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $srno; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>

<!--                <td><a href='#' class='btn btn-info'> <i-->
<!--                            class='fas fa-reply'></i>Reply</a></td>-->
<!--                <td>-->
<!--                    <form onsubmit="return confirm('Are you sure you want to mark this as solved ?')" action="adminqueryreply.php"-->
<!--                          method="post">-->
<!--                        <input type="hidden" name="action" value="delete">-->
<!--                        <input type="hidden" name="name" value="--><?php //echo $row[0]; ?><!--" id="name">-->
<!--                        <button type="submit" class="btn btn-success">-->
<!--                            <i class='fas fa-check'></i> Mark As Solved-->
<!--                        </button>-->
<!--                    </form>-->
<!--                </td>-->
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
