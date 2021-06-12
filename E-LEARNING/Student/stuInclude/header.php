<?php
  include_once('../dbconnection.php');
  if(!isset($_SESSION)){
      session_start();
  }
   
  if(isset($_SESSION['is_login'])){
     $stuLog_Email=$_SESSION['stulogin_email'];
  }
   
 if(isset($stuLog_Email)){
     $sql = "SELECT stu_image FROM lms WHERE stu_email='$stuLog_Email'";
     $result=mysqli_query($conn , $sql);
     $row = mysqli_fetch_assoc($result);
     $stu_image = $row['stu_image'];
 }    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/font-awesome-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../CSS/admin.css">
    <title>Profile</title>
</head>
<body>
  
<!--
    <h1 class="text-center mt-5 text-warning">Welcome to Admin Dashboard</h1>
    <a href="../index.php" class="btn btn-danger">Logout</a>    
-->
   

<!--********** Top Nav Bar **********-->

<nav class="navbar navbar-dark fixed-md-nowrap p-0 shadow" style="background-color:#225470;">
  <a class="navbar-brand  col-md-2 col-sm-3 mr-0 " href="adminDashboard.php">E-Learning
  </a>
</nav>
   
   <!--***** Side Bar *****-->
   
 <div class="container-fluid mb-5">
       <div class="row">
           <nav class=" col-sm-3 bg-light sidebar mt-3 py-5 d-print-none">
               <div class="sidebar-sticky">
                   <ul class="nav flex-column">
                       <li class="nav-item mb-3">
                           <img src="<?php echo $stu_image?>" alt="stuimage" class="img-thumbnail rounded-circle">
                       </li>
                        <li class="nav-item">
                           <a href="studentProfile.php" class="nav-link <?php if(PAGE == 'profile'){echo 'active';} ?>"><i class="fas fa-user"></i>Profile <span class="sr-only">(current)</span></a>
                       </li>
                        <li class="nav-item">
                           <a href="myCourse.php" class="nav-link"><i class="fab fa-accessible-icon"></i>My Course</a>
                       </li>
                        <li class="nav-item">
                           <a href="studentFeedback.php" class="nav-link"><i class="fas fa-users"></i>Feedback</a>
                       </li>
                       <li class="nav-item">
                           <a href="studentChange_pass.php" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
                       </li>
                        <li class="nav-item">
                           <a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
                       </li>
                   </ul>
               </div>
           </nav>
           
<!--
       </div>
</div>          
         
-->
        
       
      
     
    
   
  
 
