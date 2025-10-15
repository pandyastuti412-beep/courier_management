<?php
include 'db_connect.php';
include 'header.php';
session_start();
error_reporting();
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

    <div class="container" style="padding-top:50px;">
    <table class="text-center table table-bordered"> 
        <tr>
    <th>referenceno</th>
    <th>sendername</th>
    <th>recivername</th>
    <th>weight</th>
    <th>price</th>
    <th>date</th>
    <th>status</th>

    </tr>
    <?php 
            $sql="select *from add_parcel";
            $result=mysqli_query($conn,$sql);
            while($data=mysqli_fetch_assoc($result)){
    ?>
<tr>
<td><?php echo $data["refrenceno"]; ?></td>
<td><?php echo $data["sendername"]; ?></td>
<td><?php echo $data["recivername"]; ?></td>
<td><?php echo $data["weight"]; ?></td>
<td><?php echo $data["price"]; ?></td>
<td><?php echo $data["date"]; ?></td>
</tr>
<?php } ?> 

    </table>
   
    </div>
    
</body>
</html>