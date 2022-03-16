<?php
include_once('connection.php');
error_reporting(0);

$roll = $_SESSION['roll'];
$sql = "INSERT INTO `transaction_detail` (`rollno`, `payment_status`,  `amount`) VALUES ('$roll','PAID','90000');";

if($conn->query($sql) == true){
   
    $_SESSION['roll'] = $roll;
    header('Location:payment_id.php'); 
}



?>