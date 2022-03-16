<?php
include_once('connection.php');
error_reporting(0);
$roll = $_SESSION['roll'];

$sql = "select * FROM student_detail where rollno = '$roll' ";
$result = mysqli_query($conn ,$sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "select * FROM update_marks where rollno = '$roll' ";
$result2 = mysqli_query($conn ,$sql2);
$row2 = mysqli_fetch_assoc($result2);


$total = $row2['Sub1'] + $row2['Sub2'] + $row2['Sub3'] + $row2['Sub4'] + $row2['Sub5'] ;

$percentage = $total/5 ;

if($percentage >=33){
  $status ="PASS";
}
else{
  $status = "FAIL";
}

if($percentage<33){
  $remark ="Do Hard Work";
}
else if ($percentage >=33 && $percentage <=50 ){
  $remark = "Satisfactory";
}
else if ($percentage >=51 && $percentage <=70 ){
  $remark = "Good";
}
else if ($percentage >=71 && $percentage <=85 ){
  $remark = "Very Good";
}
else if ($percentage >=86 && $percentage <=100 ){
  $remark = "Excellent";
}

$grade2;
$grade3;
$grade4;
$grade5;
// grade......................................................
if($row2['Sub1']<33){
  $grade1 ="F";
}
else if ($row2['Sub1']>=33 && $row2['Sub1'] <=50 ){
  $grade1 = "D";
}
else if ($row2['Sub1'] >=51 && $row2['Sub1'] <=70 ){
  $grade1 = "C";
}
else if ($row2['Sub1'] >=71 && $row2['Sub1'] <=85 ){
  $grade1 = "B";
}
else if ($row2['Sub1'] >=86 && $row2['Sub1'] <=100 ){
  $grade1 = "A";
}

if($row2['Sub2']<33){
  $grade2 ="F";
}
else if ($row2['Sub2']>=33 && $row2['Sub2'] <=50 ){
  $grade2 = "D";
}
else if ($row2['Sub2'] >=51 && $row2['Sub2'] <=70 ){
  $grade2 = "C";
}
else if ($row2['Sub2'] >=71 && $row2['Sub2'] <=85 ){
  $grade1 = "B";
}
else if ($row2['Sub2'] >=86 && $row2['Sub2'] <=100 ){
  $grade2 = "A";
}

if($row2['Sub3']<33){
  $grade3 ="F";
}
else if ($row2['Sub3']>=33 && $row2['Sub3'] <=50 ){
  $grade3 = "D";
}
else if ($row2['Sub3'] >=51 && $row2['Sub3'] <=70 ){
  $grade3 = "C";
}
else if ($row2['Sub3'] >=71 && $row2['Sub3'] <=85 ){
  $grade3 = "B";
}
else if ($row2['Sub3'] >=86 && $row2['Sub3'] <=100 ){
  $grade3 = "A";
}

if($row2['Sub4']<33){
  $grade4 ="F";
}
else if ($row2['Sub4']>=33 && $row2['Sub4'] <=50 ){
  $grade4 = "D";
}
else if ($row2['Sub4'] >=51 && $row2['Sub4'] <=70 ){
  $grade4 = "C";
}
else if ($row2['Sub4'] >=71 && $row2['Sub4'] <=85 ){
  $grade4 = "B";
}
else if ($row2['Sub4'] >=86 && $row2['Sub4'] <=100 ){
  $grade4 = "A";
}

if($row2['Sub5']<33){
  $grade5 ="F";
}
else if ($row2['Sub5']>=33 && $row2['Sub5'] <=50 ){
  $grade5 = "D";
}
else if ($row2['Sub5'] >=51 && $row2['Sub5'] <=70 ){
  $grade5 = "C";
}
else if ($row2['Sub5'] >=71 && $row2['Sub5'] <=85 ){
  $grade5 = "B";
}
else if ($row2['Sub5'] >=86 && $row2['Sub5'] <=100 ){
  $grade5 = "A";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/st-res-UMS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet"> 
    
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Georama:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <title>MMMUT student Results</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="Home_page.html"><button class="btn"><i class="fa fa-home"></i></button></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav">
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">The University</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Admission</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Departments</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Training & Placement</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Courses</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Campus Facilities</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Careers</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Events</a></li>
              <li class="nav-item navi_margin custom-nav-item"><a href="" class="nav-link navi-font">Feedback</a></li>
            </ul>
            <a href="Home_page.html"><button class="btn btn-phone-margin"><i class="fa fa-phone"></i></button></a>
          </div>
        </div>
      </nav>
      <div class="container_fluid remove-image-css">
        <div class="image-parent">
            <img src="image/result_back.jpg " class="st-res-BgImg-css" alt="Loading...">
            <div class="img-overlay"></div>
        </div>
        <h2 class="one-view">MMMUT One View Result</h2>
        <div class="img-content">
            <!-- start one side attributes -->
            <div class="resul--1">
            <span class="result_atributes">Roll No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span><br>
            <span class="result_atributes">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><br>
            
            <span class="result_atributes">Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><br>
        </div>
            <div class="rslt-val1">
            <span class="result_value"><?php echo $row['rollno'] ?></span><br>
            <span class="result_value"><?php echo $row['name'] ?></span><br>
           
            <span class="result_value">B.Tech</span><br>
        </div>
        <!-- End one side result -->
            <div class="resul--2">
            <span class="result_atributes">Current Semester&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span><br>
            <span class="result_atributes">Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><br>
            <span class="result_atributes">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><br>
            <span class="result_atributes">Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span><br>
        </div>
            <div class="rslt-val2">
            <span class="result_value"><?php echo $row['semester'] ?></span><br>
            <span class="result_value"><?php echo $row['father_name'] ?></span><br>
            <span class="result_value"><?php echo $row['gender'] ?></span><br>
            <span class="result_value"><?php echo $row['branch'] ?></span><br>
        </div>
<!-- end one side attributes -->
        <div class="stt-res-table-css">
          <table>
            <!-- start column table -->
            <tr style="width: 100%;">
              <th>SL.No.</th>
              <th>Sub-Name</th>
              <th>Min-marks</th>
              <th>Obtain-marks</th>
              <th>Max-marks</th>
              <th>Grade</th>
            </tr>
            <!-- end column table -->
            <!-- start 1st row value column table -->
            <tr>
              <td>1</td>
              <td><?php echo $row2['SubN1'] ?></td>
              <td>33</td>
              <td><?php echo $row2['Sub1'] ?></td>
              <td>100</td>
              <td><?php echo $grade1 ?></td>
            </tr>
            <!-- end 1st row value column table -->
            <!-- start 2nd row value column table -->
            <tr>
              <td>2</td>
              <td><?php echo $row2['SubN2'] ?></td>
              <td>33</td>
              <td><?php echo $row2['Sub2'] ?></td>
              <td>100</td>
              <td><?php echo $grade2 ?></td>
            </tr>
            <!-- end 2nd row value column table -->
            <!-- start 3rd row value column table -->
            <tr>
              <td>3</td>
              <td><?php echo $row2['SubN3'] ?></td>
              <td>33</td>
              <td><?php echo $row2['Sub3'] ?></td>
              <td>100</td>
              <td><?php echo $grade3 ?></td>
            </tr>
            <!-- end 3rd row value column table -->
            <!-- start 4th row value column table -->
            <tr>
              <td>4</td>
              <td><?php echo $row2['SubN4'] ?></td>
              <td>33</td>
              <td><?php echo $row2['Sub4'] ?></td>
              <td>100</td>
              <td><?php echo $grade4 ?></td>
            </tr>
            <!-- end 4th row value column table -->
            <!-- start 5th row value column table -->
            <tr>
              <td>5</td>
              <td><?php echo $row2['SubN5'] ?></td>
              <td>33</td>
              <td><?php echo $row2['Sub5'] ?></td>
              <td>100</td>
              <td><?php echo $grade5 ?></td>
            </tr>
            <!-- end 5th row value column table -->
          </table>
        </div>
        <div class="result-status">
          <table>
            <tr>
            <th>Total Marks</th>
            <th>Obtain Marks</th>
            <th>percentage</th>
            <th>Status</th>
            <th>Remarks</th>
          </tr>
          <!-- end column result status -->
          <!-- start row value result status -->
          <tr>
            <td>500</td>
            <td><?php echo $total ?></td>
            <td><span><?php echo $percentage ?></span><span>%</span></td>
            <td><?php echo $status ?></td>
            <td><?php echo $remark ?></td>
          </tr>
          </table>
        </div>
        
          <img src="image/HD_transparent_picture.png" class="logo-st-Res" alt="Loading">
        

        </div>
        </div>


<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
      <div class="col-sm">
        <h5 class="follow-us-color">Follow us on:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-instagram"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-facebook"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-twitter"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-linkedin"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-apple"></i></a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home_page.html"><i class="fa fa-google"></i></a>
        </h5>
      </div>
      <div class="col-sm">
        <small class="rights-reserved-css">@ All right reserved</small>
      </div>
      <div class="col-sm">
        <small class="version-css">Version 2.0.1</small>
      </div>
    </div>
  </div>
<!-- end text banner -->

</body>
</html>