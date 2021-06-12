<?php
    
if(!isset($_SESSION)){
     session_start();
 }
  // Database connection
  include('../dbconnection.php');





 // Checking Email already registered
 if(isset($_POST['stuEmail'])){
    $stuver_Email= $_POST['stuEmail'];
     
    $sql = "SELECT  stu_email FROM lms WHERE stu_email ='".$stuver_Email."' ";
    $result = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);

     echo json_encode($num_rows); 
 }
// End Checking Email already registered




    

  // Check the data
 if(isset($_POST['stuName']) && isset($_POST['stuEmal']) && isset($_POST['stuPass'])){
      $stu_Name= $_POST['stuName'];
      $stu_Email= $_POST['stuEmal'];
      $stu_Pass= $_POST['stuPass'];
       
      
      // Inserting into db table name:lms
      
      $sql = "INSERT INTO lms (stu_name, stu_email, stu_pass) VALUES ('$stu_Name', '$stu_Email', '$stu_Pass')";
      $result = mysqli_query($conn,$sql);
      if($result){
          echo json_encode('OK');
      }else{
          echo json_encode('Failed');
      }
      
  }
  //End  Check the data



 // Login Email & Password verification
  // If session is not set then user can login
  if(!isset($_SESSION['is_login'])){
      
      if(isset($_POST['stulogEmail']) && isset($_POST['stulogPass'])){
          $stuLog_Email = $_POST['stulogEmail'];
          $stuLog_Pass = $_POST['stulogPass'];


          $sql = "SELECT  stu_email , stu_pass FROM lms WHERE stu_email =
          '".$stuLog_Email."' AND stu_pass='".$stuLog_Pass."' ";
           $result = mysqli_query($conn,$sql);
           $num_rows = mysqli_num_rows($result);

          if($num_rows === 1){  // $stuLog_Email=$_SESSION['stulogin_email'];
              $_SESSION['is_login'] = true;
              $_SESSION['stulogin_email'] = $stuLog_Email;
                 
              echo json_encode($num_rows);
           }else if($num_rows === 0){
              echo json_encode($num_rows);
          }
  }


}

















?>