<?php
session_start();
include_once "connection.php";
$cid = $deptrow = '';

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $selectarea = "select * from contactusanswer where cid='$cid'";
    $deptdata = mysqli_query($con, $selectarea);
    $deptrow = mysqli_fetch_array($deptdata);
}
?>

<div class="container">
    <h1  align="center">ContactUs Reply</h1> <br>
    <div class="row">
    <div class="col-sm-8 offset-sm-2">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
    <form action="">
        <div class="form-group form-row">
            <input type="text" name="cid" value="<?php echo $cid; ?>" readonly class="form-control"
                   id="cid">
            <input type="text" name="question" value="<?php echo $deptrow['question']; ?>" class="form-control"
                   id="question">
        <div class="col-sm-4">
            <label for="reply">Answer To Query: <i class="fas fa-arrow-right"></i></label></div>
        <div class="col-sm-8">  <textarea name="reply" id="reply" cols="50" rows="5"></textarea>
    </div>
            <div class="col-sm-6 offset-sm-3" align="center"><br>
                <input type="submit" id="send" name="send" class="btn btn-success" value="Send" style="width: 50%">
            </div>
            </div>
    </div>
    </form>
    </div>
</div>
