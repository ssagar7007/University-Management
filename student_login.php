<?php
include_once('connection.php');
error_reporting(0);
// session_start();

// $server ="localhost:3306";
// $username ="root";
// $password=""; 
// $conn = mysqli_connect($server, $username, $password );
// mysqli_select_db($conn,'university management');
$roll1 = $_POST['roll_no1'];
$pass = $_POST['password1'];
// echo $name;
$sql = "select * from student_detail where  rollno ='$roll1' && password = '$pass'";
$result = mysqli_query($conn ,$sql);
$num = mysqli_num_rows($result);
// echo $num;

if($num == 1){
    $_SESSION['roll'] = $roll1 ;
    header('Location:student_dashboard.php');      //page to go.......
}
else{
   echo "Invalid roll no or password";
}


?>