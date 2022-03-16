<?php

include_once('connection.php');
error_reporting(0);
// $server ="localhost:3306";
// $username ="root";
// $password=""; 
// //$databace = "student";

// $conn = mysqli_connect($server, $username, $password);
// mysqli_select_db($conn,'university management');
if(!$conn){
    die("connection to this database failed due to".mysqli_connect_error());
}
// echo "Success connecting to db";
$rollno  = $_POST['rollno'];
$Sub1  = $_POST['sub1'];
$SubN1   = $_POST['subn1'];
$Sub2 = $_POST['sub2'];
$SubN2 = $_POST['subn2'];
$Sub3 = $_POST['sub3'];
$SubN3 = $_POST['subn3'];
$Sub4 = $_POST['sub4'];
$SubN4 = $_POST['subn4'];
$Sub5 = $_POST['sub5'];
$SubN5 = $_POST['subn5'];

$sql = "INSERT INTO `university management`.`update_marks` (`rollno`, `Sub1`, `SubN1`, `Sub2`, `SubN2`, `Sub3`, `SubN3`, `Sub4`, `SubN4`, `Sub5`, `SubN5`) VALUES ('$rollno', '$Sub1', '$SubN1', '$Sub2', '$SubN2', '$Sub3', '$SubN3', '$Sub4', '$SubN4', '$Sub5', '$SubN5');";
//echo $sql;

if($conn->query($sql) == true){
 //   echo "Successfully inserted";
    }
    else{
        echo " Error: $sql <br> $conn->error";
    }

    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration</title>
</head>
<style>
.co{
        margin: 24px;
        padding: 34px;
        background-color: gray;
        display: flex;
  align-items: center;
  line-height: 2.5;
  justify-content: center;
  flex-direction: column;

}
  a{     
       text-align: center;
    background-color: rgb(50, 62, 238);
        color: #fff;
         padding: 1px 35px;
        border-radius: 15px;
        cursor: pointer;
      
       
  }
  a:link{
      text-decoration: none;
  }
  a:hover{
    background-color: rgba(27, 97, 177, 0.842);
    color : red;
  }

</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<body>
    <div class="co">Marks have been Updated
    <a href="facultymarksupdate.html"><small>Click here to new update</small></a>
</div>
</body>


</html>