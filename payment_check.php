<?php
include_once('connection.php');
error_reporting(0);
$roll =  $_SESSION['roll'];
$sql = "select * from transaction_detail where  rollno ='$roll'";
$result = mysqli_query($conn ,$sql);
$row = mysqli_fetch_assoc($result);
if($row['payment_status'] == "PAID"){
       header('Location:payment_already.php');
}
else{
    header('Location:payment.php');
}



?>