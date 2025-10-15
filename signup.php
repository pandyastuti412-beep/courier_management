<?php
include 'db_connect.php';
if(isset($_POST["s1"])){

    $name =  $_POST["txt1"];
    $password = $_POST["txt2"];
    
    $q = "insert into admin_user(name,password) values('".$name."','".$password."')";

    if(mysqli_query($conn,$q)){
        echo "<script>alert('User Registered Successfully')</script>";
        echo "<script>window.location.href='login.php'</script>";

    }
    else{
        echo "<script>alert('User registration failed')<script>";
    }
}
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container text-center text-primary">
        <form method="post">
            <div class="row my-3">
                <h1>Sign up</h1>
            </div>
            <div class="row my-3">
                <h3>Name:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt1" required></h3>
            </div>
            <div class="row">
                <h3>Password:-&nbsp;&nbsp;&nbsp;<input type="password" name="txt2" required></h3>
            </div>
            <div class="my-4">
            <input type="submit" class="btn btn-primary" value="Save" name="s1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="cancel" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>