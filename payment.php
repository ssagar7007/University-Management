<?php

include_once('connection.php');
error_reporting(0);

// $server ="localhost:3306";
// $username ="root";
// $password=""; 
// $conn = mysqli_connect($server, $username, $password );
// mysqli_select_db($conn,'university management');
$roll =  $_SESSION['roll'];

// echo $name;
$sql = "select * from student_detail where  rollno ='$roll'";
$result = mysqli_query($conn ,$sql);
$num = mysqli_num_rows($result);
// echo $num;
$data = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<link rel="stylesheet" href="css/payment.css">


<body>
    <div class="container">
        <form action="payment_process.php" method="POST">
            <h1 class="main_heading">Payment Form</h1>
            <hr>
            <h2>Contact Information</h2>
             Amount : 90000
            <p>Roll Number: <span>  </span> <?php echo $data['rollno']; ?></p>
            <label for="1name">Name: <span>  </span> <?php echo $data['name']; ?> </label>
             <p>Email: <span>    </span> <?php echo $data['email']; ?></p>
             <p>Branch: <span>    </span> <?php echo $data['branch']; ?></p>
             <p>Semester: <span>   </span> <?php echo $data['semester']; ?></p>

            <hr>
            <h2>Payment Information</h2>
            <p>Card Type:
                 <img class="icon" src="image/visacard.png" alt="visa">
                 <img class="icon" src="image/mastercard.png" alt="visa">
                 <img class="icon" src="image/rupaycard.png" alt="visa">
                <select name="card_type" id="card_type" required>
                    <option value="">select a Card Type</option>
                    <option value="visa" >Visa</option>
                    <option value="rupay">Rupay</option>
                    <option value="mastercard">Mastercard</option>
                </select>

            </p>
            <p>Card Number <input type="number" name="card_number" id="card_number" placeholder="1111-2222-3333-4444" required>
            </p>
            <p>Expiration Date: <input type="date" name="epidate" id="epidate" required> </p>
            <p>CVV <input type="password" name="cvv" id="cvv" placeholder="123" required></p>
            <input type="submit" value="Pay Now">
        </form>
    </div>

</body>

</html>