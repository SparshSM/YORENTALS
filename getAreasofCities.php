<?php

include_once "connection.php";

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $selectareas = "SELECT areas.*,cities.cityname FROM `areas` INNER JOIN cities ON areas.cityid=cities.cityid WHERE areas.cityid='$id'";
//    echo $selectareas;
    $result = mysqli_query($con, $selectareas);

    $arr = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($arr, $row);
    }


    echo json_encode($arr);
}
