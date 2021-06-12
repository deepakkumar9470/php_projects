<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/font-awesome-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/main.css">
    <title>iCollege</title>
</head>
<body>
   
<!--************ Navigation Section **************-->
<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">iCollege</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-text">Learn the Best Courses</span> </button>
      
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ml-auto custom-nav mr-3">
      <li class="nav-item active custom-nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="course.php">Courses</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="paymentStatus.php">Payment Status</a>
      </li>
      <!--**** If user logged in -->
           <?php
               session_start();
                 if(isset($_SESSION['is_login'])){
                     echo ' <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="Student/studentProfile.php">My Profile</a>
                      </li>
                      <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                      </li>';
                 }else{
                     echo ' <li class="nav-item custom-nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter" href="#">Login</a>
                      </li>
                      <li class="nav-item custom-nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter" href="#">Signup</a>
                      </li>';
                 }
            ?>
      
      <!--**** End If user logged in -->
     
     
<!--
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
-->
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#contact">ContactUs</a>
      </li>
      
    </ul>
  </div>
</nav>

<!--*********** End Navigation Section *************-->


<!--
 </body>
</html>  
-->
