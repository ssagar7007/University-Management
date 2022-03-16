<?php
// session_start();
// $server ="localhost:3306";
// $username ="root";
// $password=""; 
// $conn = mysqli_connect($server, $username, $password );
// mysqli_select_db($conn,'university management');
include_once('connection.php');
error_reporting(0);

$roll = $_SESSION['roll'];

$sql = "select * FROM student_detail where rollno = '$roll' ";
$result = mysqli_query($conn ,$sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "select * FROM transaction_detail where rollno = '$roll' ";
$result2 = mysqli_query($conn ,$sql2);
$num2 = mysqli_num_rows($result2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="css/student_dashboard.css">
</head>
<body>
    <img class="background" src="image/student_display_background.jpg" alt="">
    <div id="mySidenav" class="sidenav">
        <a href="Home_page.html" id="home">Home <img class="logo" src="image/home_logo.jpg" alt=""></a>
        <a href="student_result_page.php" id="result">Result<img class="logo" src="image/result_logo.jpg" alt=""></a>
        <a href="payment_check.php" id="fees">Fees <img class="logo2" src="image/payment_logo.jpg" alt=""> </a>
        <a href="logout.php" id="logout">Logout <img class="logo3" src="image/logout_logo.jpg" alt=""> </a>
      </div>
   <div class="welcome">Student Dashboard</div>
   <div class="roll">Roll No [<?php echo $row['rollno'] ?>]</div>
    <div id="name">Name :<?php echo $row['name'] ?> </div>
     <div id="course">Course :<?php echo "Btech" ?></div>
     <div id="branch">Branch :<?php echo $row['branch'] ?></div>
     <div id="sem">Semester :<?php echo $row['semester'] ?></div>
     <div id="email">Email :<?php echo $row['email'] ?></div>
     <div id="fee">Fees Status : <?php  if( $num2 =="1") {echo "PAID";} 
                                        else{ echo "NOT PAID";}
     ?>
    </div>
      
     <div id="father">Father :<?php echo $row['father_name'] ?></div>
     <div id="dob">DOB :<?php echo $row['dob'] ?></div>
     <div id="mobile">Mobile :<?php echo $row['mobile'] ?></div>
     <div id="gender">Gender :<?php echo $row['gender'] ?></div>
     <div id="address">Address :<?php echo $row['address'] ?></div>
</body>
</html>