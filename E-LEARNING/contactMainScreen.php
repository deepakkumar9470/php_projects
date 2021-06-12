<?php
    
  // Database connection
  include('dbconnection.php');
   
  // Check the data
 if(isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['email']) &&        isset($_POST['message'])){
      $name= $_POST['name'];
      $subject= $_POST['subject'];
      $email= $_POST['email'];
      $message= $_POST['message'];
       
       $sql = "INSERT INTO contactus(contact_name, contact_subject, contact_email, contact_msg) VALUES ('$name','$subject','$email','$message') ";
      
        // Inserting into db table name:lms
         $result = mysqli_query($conn,$sql);
          if($result){
           echo '<div class="alert alert-success" role="alert">Succesfully Submitted</div>';
           echo header('location:index.php');
          }else{
          echo '<div class="alert alert-danger" role="alert">Unable to  Submit../div>';
         }
      }



?>








