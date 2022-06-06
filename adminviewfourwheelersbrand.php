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
    <h1 class="text-center">Available Brands</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>BRAND</th>
            <th class="text-center" colspan="2">Controls</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $srno = 1;
        include_once "connection.php";
        $selectcars = "select * from fourwheelers";
        $result = mysqli_query($con, $selectcars);
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><h4><?php echo $srno; ?></h4></td>
                <td><h4><?php echo $row[1]; ?></h4></td>

                <td>
                    <form onsubmit="return confirm('Are you Sure to Delete ?')" action="adminmanagefourwheelers.php"
                          method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="Brand" value="<?php echo $row[1]; ?>" id="Brand">
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">
                                <i class='fas fa-trash-alt'></i> Delete
                            </button>
                        </div>
                    </form>
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
