<?php
include 'db_connect.php';
if(isset($_POST["s1"])){

    $branchcode = $_POST["txt1"];
    $street =  $_POST["txt2"];
    $city = $_POST["txt3"];
    $state = $_POST["txt4"];
    $pincode = $_POST["txt5"];
    $contact = $_POST["txt6"];

    $q = "insert into branch (branchcode,street,city,state,pincode,contact) VALUES (".$branchcode.",'".$street."','".$city."','".$state."', ".$pincode.",".$contact.")";

    if(mysqli_query($conn,$q)){
        echo "<script>alert('added Successfully')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script>alert('failed')<script>";
    }
} 
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container text-center text-primary">
        <form method="post">
            <div class="row my-3">
                <h1>New Branch</h1>
            </div>
            <div class="row my-3">
                <h3>branchcode:-&nbsp;&nbsp;&nbsp;<input type="number"  name="txt1" required></h3>
            </div>
            <div class="row my-3">
                <h3>street:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt2" required></h3>
            </div>
            <div class="row my-3">
                <h3>city:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt3" required></h3>
            </div>
            <div class="row my-3">
                <h3>state:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt4" required></h3>
            </div>
            <div class="row my-3">
                <h3>pincode:-&nbsp;&nbsp;&nbsp;<input type="number" name="txt5" required></h3>
            </div>
            <div class="row my-3">
                <h3>contact:-&nbsp;&nbsp;&nbsp;<input type="number"  name="txt6" required></h3>
            </div>
            <div class="my-4">
            <input type="submit" class="btn btn-primary" value="save" name="s1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-danger"value="cancel">
            </div>
        </form>
    </div>
</body>

</html>
