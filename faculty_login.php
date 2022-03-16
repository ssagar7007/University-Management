<?php
session_start();
include_once('connection.php');
error_reporting(0);
// $server ="localhost:3306";
// $username ="root";
// $password=""; 
// $conn = mysqli_connect($server, $username, $password );
// mysqli_select_db($conn,'university management');
$faculty1 = $_POST['faculty_id1'];
$pass = $_POST['password1'];
// echo $name;
$sql = "select * from faculty_detail where  faculty_id ='$faculty1' && password = '$pass'";
$result = mysqli_query($conn ,$sql);
$num = mysqli_num_rows($result);
// echo $num;

if($num == 1){
    $_SESSION['faculty_id1'] = $faculty1 ;
    header('Location:faculty_dashboard.php');      //page to go.......
}
else{
   echo "Invalid Faculty ID or password";
}


?>