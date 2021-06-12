<?php
    
if(!isset($_SESSION)){
     session_start();
 }
  // Database connection
  include_once('../dbconnection.php');



 // Admin Login:Email & Password verification
  // If session is not set then user can login
  if(!isset($_SESSION['is_adminlogin'])){
      
      if(isset($_POST['stuadminEmail']) && isset($_POST['stuadminPass'])) {
          $stuAdmin_Email = $_POST['stuadminEmail'];
          $stuAdmin_Pass = $_POST['stuadminPass'];


          $sql = "SELECT  admin_email , admin_pass FROM admin_db  WHERE admin_email =
          '".$stuAdmin_Email."' AND admin_pass='".$stuAdmin_Pass."' ";
           $result = mysqli_query($conn,$sql);
           $row = mysqli_num_rows($result);

          if($row === 1){
              $_SESSION['is_adminlogin'] = true;
              $_SESSION['stuadminLogin_email'] = $stuAdmin_Email;
              echo json_encode($row);
           }else if($row === 0){
              echo json_encode($row);
          }
  }


}

















?>