<?php

include_once('connection.php');
error_reporting(0);

if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}

// echo "Success connecting to db";
$Name  = $_POST['name'];
$FName  = $_POST['f_name'];
$DOB   = $_POST['DOB'];
$Gender = $_POST['gender'];
$branch = $_POST['branch'];
$semester = $_POST['sem'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$mobile = $_POST['Contact'];
$password = $_POST['password'];

$sql = "INSERT INTO `university management`. `student_detail` ( `name`, `father_name`, `dob`, `gender`, `branch`, `semester`, `address`, `mobile`, `email`, `password`) VALUES ('$Name', '$FName ', '$DOB', '$Gender', '$branch', '$semester', '$Address', '$mobile', '$Email', '$password');";
// echo $sql;

if($conn->query($sql) == true){
    //    echo "Successfully inserted";
    $sql2 = "select * FROM student_detail where name = '$Name' && email = '$Email' ";
    $result = mysqli_query($conn ,$sql2);
    $rows = mysqli_fetch_assoc($result);


    }
    else{echo " Error: $sql <br> $conn->error";  }
    $conn->close(); 
 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>College Registration</title>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">


<body>
    <div class="co">Dear, <?php echo $Name  ?> you have successfully completed your registration. <br>
   <p class="para"> Your roll no is <?php echo $rows['rollno']; ?> and password is <?php echo $rows['password'];?></p>
        
        
    <a class="login" href=" student_login.html"><small>Click here to Login</small></a>
</div>
</body>

</html>