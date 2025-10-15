<?php
session_start();
error_reporting(0);
include 'db_connect.php';
if(isset($_POST["s1"])){

    $name = $_POST["txt1"];
    $email =  $_POST["txt2"];
    $phno= $_POST["txt3"];
    $address = $_POST["txt4"];
    $govno = $_POST["txt5"];
    $date = $_POST["txt6"];

    $q = "insert into `staff`(`name`, `email`, `phno`, `address`, `govno`, `date`) VALUES ('".$name."','".$email."',".$phno.",'".$address."',".$govno.",'".$date."')";
    
    $result= mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    
    if(mysqli_query($conn,$q)){
        echo "<script>alert('added Successfully ')</script>";
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
                <h1>New staff</h1>
            </div>
            <div class="row my-3">
                <h3>name:-&nbsp;&nbsp;&nbsp;<input type="text"  name="txt1" required></h3>
            </div>
            <div class="row my-3">
                <h3>email:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt2" required></h3>
            </div>
            <div class="row my-3">
                <h3>phno:-&nbsp;&nbsp;&nbsp;<input type="number" name="txt3" required></h3>
            </div>
            <div class="row my-3">
                <h3>address:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt4" required></h3>
            </div>
            <div class="row my-3">
                <h3>govno:-&nbsp;&nbsp;&nbsp;<input type="number" name="txt5" required></h3>
            </div>
            <div class="row my-3">
                <h3>date:-&nbsp;&nbsp;&nbsp;<input type="date"  name="txt6" required></h3>
            </div>
            <div class="my-4">
            <input type="submit" class="btn btn-primary" value="save" name="s1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-danger"value="cancel">
            </div>
        </form>
    </div>
</body>

</html>
