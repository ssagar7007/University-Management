<?php
session_start();
$server ="localhost:3306";
$username ="root";
$password=""; 
$conn = mysqli_connect($server, $username, $password );
mysqli_select_db($conn,'university management');
?>