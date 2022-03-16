<?php
include_once('connection.php');
error_reporting(0);

$roll = $_SESSION['roll'];
 $sql = "select * from transaction_detail where rollno = '$roll' ;";
 $result = mysqli_query($conn ,$sql);

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Payment ID</title>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">


<body>
    <div class="co"> Your payment has been done successfully of amount 90000 <br>
   <p class="para"> Your transaction ID is <?php echo $row['transaction_id']; ?>&nbsp;&nbsp;&nbsp;Date : 
   <?php echo $row['date']; ?> &nbsp;&nbsp;&nbsp;Time : <?php echo $row['time']; ?></p>
        
    

</div>
</body>

</html>