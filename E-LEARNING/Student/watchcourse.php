
<?php
    
if(!isset($_SESSION)){
     session_start();
 }
  // Database connection
   include_once('../dbconnection.php');



 if(isset($_SESSION['is_login'])){
     $stuLog_Email=$_SESSION['stulogin_email'];
  }else{
     echo header('location:../index.php');
 }
?>   


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
    <title>Watch Course</title>
</head>
<body>
   
<!--************ Main Section **************-->
<div class="container-fluid bg-light p-2">
     <h3>Welcome to iCollege</h3>
     <a href="./myCourse.php" class="btn btn-danger">My Course</a>
    
</div>
<div class="container-fluid bg-light p-2">
     <div class="row">
         <div class="col-sm-3 border-light">
             <h4 class="text-center">Lessons</h4>
             <ul class="nav flex-column" id="playlist">
                 <?php
                   if(isset($_GET['course_id'])){
                    $course_id= $_GET['course_id'];
                    $sql = "SELECT * FROM lesson WHERE course_id ='.$course_id.'";
                    $result = mysqli_query($conn,$sql);
                     if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)){
                        echo '<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style="cursor:pointer;">'.$row['lesson_name'].'</li>';     
                       }   
                      }
                     }
                  ?>
                 
             </ul>
         </div>
           <div class="col-sm-8">
             <video src="" id="videoarea" class="mt-5 w-75 ml-2" controls></video>
           </div>  
     </div>
    
</div>




<!-- Scripts-->  
   <script src="../Js/jquery.js"></script>
    <script src="../Js/popper.js"></script>
    <script src="../Js/bootstrap.js"></script>
    <script src="../Js/font-awesome-icons.js"></script>
   
    <script src="../Js/info.js"></script>


 </body>
</html>  



<!--*********** End Main Section *************-->




