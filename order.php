<?php
    include 'header.php';
    include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form action="" method="post">
        <div class=" container row">
                <div class="col-6 text-center">
                    <h2 class="text-center">SENDER</h2>
                       <h4> Name:<input type="text" name="sname" placeholder="Sender FullName" required><br><br>
                            Email:<input type="text" name="remail" placeholder="Sender EmailId" required><br><br>
                            phone no:<input type="text" name="sphone" placeholder="Sender number" required><br><br>
                            Address:<input type="textfield" name="saddress" placeholder="sender address" required><br><br>
                            Weight:<input type="number" name="wgt" placeholder="weights in kg" required><br><br>
                            Payment Id:<input type="number" name="billno" placeholder="enter transition num" required><br><br>
                            Date:<input type="date" name="date" value="calender">
                   </h4>
                </div>
                <div class="col-6 text-center">
                    <h2 class="text-center">RECIEVER</h2>
                    <h4> Name:<input type="text" name="sname1" placeholder="Receiver FullName" required><br><br>
                         Email:<input type="text" name="remail1" placeholder="Receiver EmailId" required><br><br>
                         phone no:<input type="text" name="sphone1" placeholder="Receiver number" required><br><br>
                         Address:<input type="textfield" name="saddress1" placeholder="Receiver address" required><br><br>
                         Date:<input type="date" name="date1" value="calender">
</h4>
                </div>


        </div>
    </form>
    
</body>
</html>