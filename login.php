<?php

session_start();
include 'db_connect.php';
include 'header.php';

if(isset($_POST["s1"])){

    $username=$_POST["txt1"];
    $password=$_POST["txt2"];

    $q="select * from admin_user where username='".$username."' AND  password='".$password."' ";


    $user_query=mysqli_query($conn,$q);

    $data=mysqli_fetch_assoc($user_query);

    if(mysqli_num_rows($user_query)==1){
        $_SESSION["loggedin"]=true;
        $_SESSION["uid"]=$data["id"];
        $_SESSION["unm"]=$username;
        header("Location: index.php");
    }
    elseif(mysqli_num_rows($admin_query)==1){
        $_SESSION["admin_loggedin"]=true;
        $_SESSION["admin_unm"]=$username;
        header("Location: admin/dashboard.php");
    }
    else{
        echo "Error";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container text-center text-primary">
        <form method="post">
            <div class="row my-3">
                <h1>Login</h1>
            </div>
    <div class="row my-3">
                <h3> Name:-&nbsp;&nbsp;&nbsp;<input type="text" name="txt1" required></h3>
            </div>
            <div class="row my-3">
                 <h3> Password: <input type="password" name="txt2" required></h3>
            </div>
            <div class="my-4">
            <input type="submit" class="btn btn-primary" value="Register" name="s1">
            </div>
        
        <h3>Don't Have Accout ?<a href="signup.php">Sign up</a> </h3>
   
    </form>
</body>
</html>
