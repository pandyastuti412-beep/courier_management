<?php
$host="localhost";
$uname="root";
$password="";
$db="courier_db";

$conn=mysqli_connect($host,$uname,$password,$db);
if (!$conn)
 {
    echo "Error In Connection";
}
?>
