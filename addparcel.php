<?php
session_start();
error_reporting(0);
include 'db_connect.php';
include 'header.php';
if(isset($_POST["s1"])){

    $refrenceno = $_POST["txt1"];
    $email = $_POST["txt2"];
    $sendername = $_POST["txt3"];
    $senderaddress = $_POST["txt4"];
    $sendercontact = $_POST["txt5"];
    $sendercity = $_POST["txt6"];
    $recievername = $_POST["txt7"];
    $recieveraddress = $_POST["txt8"];
    $recievercontact = $_POST["txt9"];
    $recievercity = $_POST["txt10"];
    $weight = $_POST["txt11"];
    $price = $_POST["txt12"];
    $date = $_POST["txt13"];

  $q = "INSERT INTO `add_parcel` (refrenceno,email,sendername,senderaddress,sendercontact,sandercity,recivername,recieveraddress,recievercontact,recievercity,weight,price,date) VALUES (".$refrenceno.",'".$email."','".$sendername."','".$senderaddress."','".$sendercontact."','".$sendercity."','".$recievername."','".$recieveraddress."','".$recievercontact."','".$recievercity."','".$weight."','".$price."','".$date."')";   
    $result= mysqli_query($conn,$q);
    
    if($result){
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
    <title>add parcel</title>

</head>

<body>
<div class="row container text-center">
            <div class="col-6 ">
                <form method="post">
                    <h2 >SENDER</h2>
                       <h4> referenceno:<input type="number" name="txt1" placeholder="refrenceno" required><br><br>
                            Email:<input type="email" name="txt2" placeholder="Sender EmailId" required><br><br>
                            sender name:<input type="text" name="txt3" placeholder="Sender name" required><br><br>
                            sender address:<input type="text" name="txt4" placeholder="Sender address" required><br><br>
                            sender contact:<input type="number" name="txt5" placeholder="sender contact" required><br><br>
                            sender city:<input type="text" name="txt6" placeholder="sender city" required><br><br>
                
                     </h4>
                    
                </div>

                <div class="col-6 ">
                    <h2>RECEIVER</h2>
                       <h4> reciever Name:<input type="text" name="txt7" placeholder="reciever FullName" required><br><br>
                            reciever address:<input type="text" name="txt8" placeholder="reciever address" required><br><br>
                            reciever contact:<input type="number" name="txt9" placeholder="reciever number" required><br><br>
                            reciever city:<input type="text" name="txt10" placeholder="reciever city" required><br><br>
                          
                     </h4>
                     
 
        </form>
    </div>

    <div class="text-center">
        <h4 class=" my-2 text-center">
    Date:<input type="date" name="txt13" value="calender">
                            weight:<input type="number" name="txt11" placeholder="weight"required>
                    price:<input type="number" name="txt12" required><br><br>
                    </h4>
                    <input type="button" class="btn btn-primary col-2" value="save" name="s1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="btn btn-danger col-2"value="cancel">
    </div>
    </div>
</body>

</html>
