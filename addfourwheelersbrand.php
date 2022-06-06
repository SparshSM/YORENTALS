<?php
session_start();
include_once "connection.php";
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
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="adminsidebar.css">
    <link rel="stylesheet" href="add&view.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <style>
        #font{
            font-family: Acme;
        }
    </style>
</head>
<body>
<div style="color: black !important; width: 100%">
    <div class="row" id="font">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="text-center mb-5" style="font-family: 'Noto Serif', serif;">
                <ins><br>ADD BRAND</ins>
            </h1>
            <form action="4wheelerupload.php" method="post" enctype="multipart/form-data" METHOD="post">
                <div class="form-group form-row">
                    <label for="Brand" class="col-sm-4 " style="font-family: 'Noto Serif', serif;">
                        <h2>
                            <ins>Brand</ins>
                        </h2>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" required name="Brand" id="Brand" width="80%" placeholder="Enter Brand"
                               class="form-control bg-light">
                    </div>
                </div>
                    <div class="form-group form-row">
                        <div class="col-sm-8 offset-sm-4">
                            <input type="submit" value="Submit" class="btn btn-dark align-self-xl-end"
                                   style="width: 100px; height: 45px ">
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
</body>
</html>


